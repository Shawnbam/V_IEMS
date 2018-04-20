<?php

namespace App\Http\Controllers;

use App\Dumb;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller{

    public function getProfile(){
        $results = Auth::user();
        return view('user.profile')->with(['results' => $results]);
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this -> validate($request, [
            'email' => 'required',
            'password' => 'required|min:4'
        ]);
        if(Auth::attempt(['roll' => $request->input('email'), 'password' => $request->input('password')]))
        {
            //dd('its');
            return redirect()->route('home.feeds', ['type' => 'home']);
        }

        return redirect()->back();
    }

//    public function postSignin(Request $request){
//        $this -> validate($request, [
//            'email' => 'email|required',
//            'password' => 'required|min:4'
//        ]);
//        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
//        {
//            /*if(Session::has('oldUrl')){
//                $oldUrl = Session::get('oldUrl');
//                //dd($oldUrl);
//                Session::forget('oldUrl');
//                return redirect()->to($oldUrl);
//            }*/
//            dd('done');
//            //return redirect()->route('dashboard');
//        }
//
//        return redirect()->back();
//    }


    public function postSignup(Request $request){

        $this -> validate($request, [
            'roll' => 'required|unique:users',
            'password' => 'required|min:4'
        ]);

        $name = $request->input('name');
        $email = $request->input('roll');
        $password = bcrypt($request->input('password'));

        $user = new User();
        $user->name = $name;
        $user->roll = $email;
        $user->password = $password;
        $user->type = 'common';
        $user->dept = 'INFT';
        $user->email = " ";
        $user->phone = 0;
        $user->tags = " ";
        $user->linkedin = " ";
        $user->twitter = " ";
        $user->fb = " ";
        $user->github = " ";
        $user->img= " ";
        $user->save();

        Auth::login($user);





        return redirect()->route('home.feeds', ['type' => 'home']);
//
//        $this -> validate($request, [
//            'email' => 'email|required|unique:users',
//            'password' => 'required|min:4'
//        ]);
//
//        $user = new User([
//            'email' => $request->input('email'),
//            'password' => bcrypt($request->input('password'))
//        ]);
//
//        $user->save();

        //dd('DONE');
        //return redirect()->route('product.index');
    }

    public function getLogout(Request $request){
        Auth::logout();
        //return redirect()->back();//using back is tricky many a times
        return redirect()->route('home');
    }

    public function proedit(){
        return view('user.editprofile');
//        $pass = Ack();
    }

    public function editpro(Request $request){
        $pass = Auth::User()->id;
        $user = User::find($pass);
        if( Auth::user()->id != $user->id ){
            //dd(Auth::user().' '.$user->user );
            return redirect()->back();
        }
        $user->name = $request['name'];
        $user->phone= $request['phone'];
        if($request['email'] == "" or $request['email'] == null)
            $user->email = " ";
        else
        $user->email = $request['email'];

        if($request['linkedin'] == "" or $request['linkedin'] == null)
            $user->linkedin = " ";
        else
            $user->linkedin = $request['linkedin'];

        if($request['twitter'] == "" or $request['twitter'] == null)
            $user->twitter = " ";
        else
            $user->twitter = $request['twitter'];

        if($request['fb'] == "" or $request['fb'] == null)
            $user->fb = " ";
        else
            $user->fb = $request['fb'];

        if($request['github'] == "" or $request['github'] == null)
            $user->github = " ";
        else
            $user->github = $request['github'];

        $user->update();

        return redirect()->route('myprofile');
    }



    public function img(Request $request){
        $img = $request['img'];
        if ($img !== null) {
            echo $img->getClientOriginalExtension();
        }
        $user = Auth::user();
        $input['imagename'] = time().'.'.$img->getClientOriginalExtension();
        $dest = public_path('/images/'.Auth::User()->id);
        $img->move($dest, $input['imagename']);
        $user->img = 'images/'.Auth::User()->id.'/'.$input['imagename'];
        $user->update();
        return redirect()->back();
    }



}