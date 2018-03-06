<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

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

        if($request->user()->books()->save($book)){
            $message = 'Book record successfully created';
        }

        //dd("asdasd");
        return redirect()->route('books.buy')->with(['message' => $message]);
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
