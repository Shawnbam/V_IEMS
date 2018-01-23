<?php

namespace App\Http\Controllers;

use App\Dumb;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller{
    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this -> validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
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
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));

//ye bhi chalega
////        $user = new User([
//            'name' => $request->input('name'),
//            'email' => $request->input('email'),
//            'password' => bcrypt($ request->input('password'))
//        ]);
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->type = 'common';
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



}