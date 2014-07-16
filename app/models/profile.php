<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profile
 *
 * @author aeln
 */
class profile extends Eloquent{
    
     protected $table = 'profile';
     
     public function users(){
         return $this->belogsTo('App\\Models\\Users');
     }
    //put your code here
}
