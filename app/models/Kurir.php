<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Kurir extends Eloquent{
    protected $table = 'kurir';
    public $timestamps = false; //pernyataan saya tidak menggunakan field create_at dan updtae_at di tabel test. karna laravel, aturannya menuliskan timpstampt default true
    
}
