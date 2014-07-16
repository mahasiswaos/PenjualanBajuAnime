<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use View;

class BootstrapController extends BaseController {

    public function index() {
        return View::make('index');
    }
    //public function index() {
    //    return View::make('test');
    //}

    //public function show() {
    //    $x = 10;
    //    $y = 5;
    //    echo "Bilangan Perkalian x * y = ". $x * $y;
    //}
    
    
}
