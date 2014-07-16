<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\Kurir;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Paginator;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class KurirController extends BaseController {

    public function view() {

        //$data['kurir']= Kurir::paginate(4);
       
        
        
//        $data ['test']=Test::all();
//        print_r($data->nama);
        $t = Kurir::all();
        $data = array(
            'kurir' => $t,
        );
        return View::make('kurir.view', $data); //make bermaksud , nantinya akan ada test.view yang akan di buat
    }

    public function add() {


        return View::make('kurir.add');
//        
//        $t = new Test();
////        $t->id = 1;
//        $t->nama = 'ryal';          //warna hijau menunjukkan nama field pada tabel
//        $t->tanggal_lahir = date('Y/m/d'); //panah dari berfungi mengisi ke tabel tes pada database testing
//        $t->save();                 //save menyimpan langsung pada database
    }

    public function addProses() {

        $destinationPath = '';
        $filename = '';

        $file = Input::file('foto');
        $destinationPath = public_path() . '/foto/';
        $filename = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if ($uploadSuccess) {
            $in = Input::all();

            $t = new Kurir();
            $t->namakurir = $in['namakurir'];
            $t->alamat = $in['alamat'];
            $t->kota = $in['kota'];
            $t->kodepos = $in['kodepos'];
            $t->foto = $filename;
            $t->save();
            
            return Redirect::to('/kurir');
        }



//        echo "<pre>";
//        print_r($in);
//        echo "</pre>";      
    }


    public function edit($id) {

        $t = Kurir::find($id);
        $data = array(
            'kurir' => $t,
        );
        return View::make('kurir.edit', $data);
    }

    public function editProses() {

        $in = Input::all();

        $t = Kurir::find($in['id']);
        $t->namakurir = $in['namakurir'];
        $t->alamat = $in['alamat'];
        $t->kota = $in['kota'];
        $t->kodepos = $in['kodepos'];
        $t->update();

        return Redirect::to('/kurir');
    }

    public function delete($id) {

        $t = Kurir::find($id); //find fungsinya mencari ID pada tabel
        $t->delete();

        return Redirect::to('/kurir');
    }

}
