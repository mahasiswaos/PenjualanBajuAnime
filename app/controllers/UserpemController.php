<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\Userpem;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserpemController extends BaseController {

    public function view() {


        $t = Userpem::all();
        $data = array(
            'userpem' => $t,
        );
        return View::make('userpem.view', $data); 
    }

    public function add() {


        return View::make('userpem.add');

    }

    public function addProses() {
        
      $in = input::all();
      $t = new Userpem();
      $t ->nama = $in['nama'];
      $t ->alamat = $in['alamat'];
      $t ->kota = $in['kota'];
      $t ->kodepos = $in['kodepos'];
      $t ->save();
      
      return Redirect::to('/userpem');
        
    

      
    }

    public function edit($id) {

        $t = Userpem::find($id);
        $data = array(
            'userpem' => $t,
        );
        return View::make('userpem.edit', $data);
    }

    public function editProses() {

        $in = Input::all();

        $t = Userpem::find($in['id']);
        $t->nama = $in['nama'];
        $t->alamat = $in['alamat'];
        $t->kota = $in['kota'];
        $t->kodepos = $in['kodepos'];
        $t->update();

        return Redirect::to('/userpem');
    }

    public function delete($id) {

        $t = Userpem::find($id); 
        $t->delete();

        return Redirect::to('/userpem');
    }

}
