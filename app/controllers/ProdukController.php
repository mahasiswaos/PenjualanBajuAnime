<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\Produk;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProdukController extends BaseController {

    public function view() {


        $t = Produk::all();
        $data = array(
            'produk' => $t,
        );
        return View::make('produk.view', $data); //make bermaksud , nantinya akan ada test.view yang akan di buat
    }

    public function add() {


        return View::make('produk.add');
//        
//        $t = new Test();
////        $t->id = 1;
//        $t->nama = 'ryal';          //warna hijau menunjukkan nama field pada tabel
//        $t->tanggal_lahir = date('Y/m/d'); //panah dari berfungi mengisi ke tabel tes pada database testing
//        $t->save();                 //save menyimpan langsung pada database
    }

    public function addProses() {

        $in = Input::all();

        $t = new Produk();
        $t->namaproduk = $in['namaproduk'];
        $t->jeniskain = $in['jeniskain'];
        $t->warna = $in['warna'];
        $t->ukuran = $in['ukuran'];
        $t->save();

        return Redirect::to('/produk');

//        echo "<pre>";
//        print_r($in);
//        echo "</pre>";      
    }

    public function edit($id) {

        $t = Produk::find($id);
        $data = array(
            'produk' => $t,
        );
        return View::make('produk.edit', $data);
    }

    public function editProses() {

        $in = Input::all();

        $t = Produk::find($in['id']);
        $t->namaproduk = $in['namaproduk'];
        $t->jeniskain = $in['jeniskain'];
        $t->warna = $in['warna'];
        $t->ukuran = $in['ukuran'];
        $t->update();

        return Redirect::to('/produk');
    }

    public function delete($id) {

        $t = Produk::find($id); //find fungsinya mencari ID pada tabel
        $t->delete();

        return Redirect::to('/produk');
    }

}
