<?php


namespace App\Controllers;

use App\Controllers\BandController;
use App\Models\Users;
use View;


/**
 * Description of kegiatanController
 *
 * @author aeln
 */
class kegiatanController {
    //put your code here
    
    function index(){
        return View::make('kegiatan.view');
    }
}
