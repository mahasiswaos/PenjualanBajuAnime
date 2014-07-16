<?php
namespace App\Controlllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\Controllers\BaseController;
use View;

class UserController extends \App\Controllers\BaseController{
    public function show_data(){
        $data['data_user']= User::find($id);
        return View::make('User/detail');
    }
            
}
