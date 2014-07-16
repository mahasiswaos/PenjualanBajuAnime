<?php

namespace App\Controllers;

use App\Controllers\BandController;
use Input;
use Validator;
use Auth;
use Redirect;
use Session;
use App\Models\Users;
use Illuminate\Support\Facades\Crypt;
use View;

class LoginController extends BaseController {

    /**
     * 
     * @return View
     */
    public function index() {
//        $secret=  Crypt::encrypt('ryal');
//        echo $secret;
        return View::make('login.view');
    }

    /**
     * 
     * @return Redirect
     */
    
//    public function prosesLogin() {
//        $inp = Input::all(); //Input::all() fungsinya mirip dengan $_POST
//        echo "<pre>";
//        print_r($allinput);
//        echo "</pre>";
//    }
    public function prosesLogin() {
        $inp = Input::all();
        $rules = [
            'email' => 'required|email', // kurung Kotak itu array di PHP 5.4
            'password' => 'required'
        ];
        $valid = Validator::make($inp, $rules); //
        if ($valid->fails()) {
            return Redirect::to('/login')->withErrors($valid); //redirect berfungsi sebagai pengembalian ke halaman tersebut, jika terjadi error
        } else {
            $pass = $inp['password'];
            $email = $inp['email'];
            $data = [
                'email' => $email,
                'password' => $pass,
            ];
            if (Auth::attempt($data)) {
                Session::flash('message', 'Successfully Login!');
                return Redirect::intended('/users');
            } else {
                Session::flash('message', 'Email dan Password no valid!');
                return Redirect::to('/login');
            }
        }
    }

    /**
     * 
     * @return Redirect
     */
    public function doLogout() {
        Auth::Logout();
        return Redirect::to('login');
    }

}
