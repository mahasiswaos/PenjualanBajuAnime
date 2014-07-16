<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\Test;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TestController extends BaseController {

    public function view() {

//        $data ['test']=Test::all();
//        print_r($data->nama);
        $t = Test::all();
        $data = array(
            'test' => $t,
        );
        return View::make('test.view', $data); //make bermaksud , nantinya akan ada test.view yang akan di buat
    }

    public function add() {


        return View::make('test.add');
//        
//        $t = new Test();
////        $t->id = 1;
//        $t->nama = 'ryal';          //warna hijau menunjukkan nama field pada tabel
//        $t->tanggal_lahir = date('Y/m/d'); //panah dari berfungi mengisi ke tabel tes pada database testing
//        $t->save();                 //save menyimpan langsung pada database
    }

    public function addProses() {

        $in = Input::all();

        $t = new Test();
        $t->nama = $in['nama'];
        $t->tanggal_lahir = $in['tanggal_lahir'];
        $t->save();

        return Redirect::to('/test');

//        echo "<pre>";
//        print_r($in);
//        echo "</pre>";      
    }

    public function edit($id) {

        $t = Test::find($id);
        $data = array(
            'test' => $t,
        );
        return View::make('test.edit', $data);
    }

    public function editProses() {

        $in = Input::all();

        $t = Test::find($in['id']);
        $t->nama = $in['nama'];
        $t->tanggal_lahir = $in['tanggal_lahir'];
        $t->update();

        return Redirect::to('/test');
    }

    public function delete($id) {

        $t = Test::find($id); //find fungsinya mencari ID pada tabel
        $t->delete();
        
        return Redirect::to('/test');
    }

}
