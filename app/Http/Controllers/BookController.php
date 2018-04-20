<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Auth;
use Mail;

class BookController extends Controller
{
    public function getBook(){
        $subjects=Book::all();

        return view('books.buy')->with('subjects', $subjects);
    }

    public function listsub(Request $request){
        $branch=$request['branch'];
        $sem=$request['sem'];
        $txt=$request['searchtxt'];

        $subjects=Book::where('sem','=',$sem)->where('branch','=',$branch)->where('bookname', 'LIKE', '%'.$txt.'%')->get();

        return view('books.buy')->with('subjects', $subjects);
    }

    public function postSellBooks(Request $request){

        $this->validate($request,[
            'bookname' => 'required',
            'sem' => 'required',
            'branch' => 'required'
        ]);

        $book = new Book();
        $book->bookname = $request['bookname'];
        $book->sem = $request['sem'];
        $book->branch = $request['branch'];
        $book->price = $request['price'];
        $book->roll = Auth::User()->roll;

        if($request->user()->books()->save($book)){
            $message = 'Book record successfully created';
        }

        //dd("asdasd");
        return redirect()->route('books.buy')->with(['message' => $message]);
    }

    public function sendmail($id){
        $book = Book::find($id);
        $data = array(
            'email' => 'shbhmambavale7@gmail.com',
            'bname' => $book->name,
            'branch' => $book->branch,
            'sem' => $book->sem,
            'price' => $book->price,
            'subject' => 'Buy Book',
            'name' => Auth::user()->name,
            'num' => Auth::user()->phone,
        );
        Mail::send('sendmail',['data' => $data],function ($message) use ($data){
            $message->from('shbhmambavale7@gmail.com', 'Shubham');
            $message->to('shbhmambavale7@gmail.com');
            $message->subject($data['subject']);
        });

        return redirect()->back()->with(['message' => 'Details Sent to the book owner']);

    }


//
//    public function listbytxtsub(Request $request){
//        $txt=$request['searchtxt'];
//
//        $subjects=Book::where('bookname', 'LIKE', '%'.$txt.'%')->get();
//
//        return view('books.buy')->with('subjects', $subjects);
//    }
    //search
}
