@extends('layout.bootstrap3.index')

@section('content')
<div class="container" style="margin-top: 50px; width: 435px;">
    <div class="row">
        <!--<div class="panel-body"></div>-->
        <br/>
        <div class="col-sm-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-home"></i> 
                    <b>Tambah Data</b>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <form method="post" action="<?php echo URL::to('/userpem/add/proses'); ?>" class="form-horizontal" >
                            <div class='form-group' >
                                <label>Nama Pelanggan</label>
                                <input type='text' name="nama" class="form-control" style="width: 300px;">
                            </div>
                            <div class='form-group'>
                                <label>Alamat</label>
                                <input type='text' name="alamat" class="form-control" style="width: 300px;">
                            </div>
                            <div class='form-group'>
                                <label>Kota</label>
                                <input type='text' name="kota" class="form-control" style="width: 300px;">
                            </div>
                            <div class='form-group'>
                                <label>Kode Pos</label>
                                <input type='text' name="kodepos" class="form-control" style="width: 300px;">
                            </div>
                            <div class='form-group'>
                                <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save">Simpan</i></button>

                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop