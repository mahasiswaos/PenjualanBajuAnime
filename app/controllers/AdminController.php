<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author aeln
 */
class AdminController extends BaseController{
    function _construct(){
        $this->beforeFilter('auth',['except'=>'/login']);
    }
}
    

