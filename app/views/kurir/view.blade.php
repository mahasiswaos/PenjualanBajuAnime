@extends('layout.bootstrap3.index')

@section('content')

<div class="container" style="margin-top: 20px">
    <ul class="nav nav-pills">
        <li><a href="<?php echo URL::to('/') ?>">Home</a></li>
        <li class="dropdown active"><a class="dropdown-toggle" 
                                       data-toggle="dropdown" href="#">Input Data
                <span class="caret"></span></a>

            <ul class="dropdown-menu">
                <li><a href="<?php echo URL::to('/produk') ?>">
                        Data Produk</a></li>
                <li><a href="<?php echo URL::to('/kurir') ?>">
                        Data Jasa Pengiriman</a></li>
                <li><a href="<?php echo URL::to('/userpem') ?>">
                        Data Pelanggan</a></li>
            </ul>
        </li>
        <li><a href="#">Admin</a></li>
    </ul>
</div>

<div class="container">
    <br><br>
</div>

<div class="container">
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group">
            <a class="btn btn-warning" href="<?php echo URL::to('/produk') ?>">Data Produk</a>
            <a class="btn btn-info" href="<?php echo URL::to('/userpem') ?>">Data Pelanggan</a>
            <a class="btn btn-success" href="<?php echo URL::to('/kurir') ?>">Data Jasa Pengiriman</a>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px; width: 800px;">

    <div class="row">
        <!--<div class="panel-body"></div>-->
        <br/>
        <div class="col-sm-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-home"></i> 
                    <b>Data Jasa Pengiriman</b>
                </div>
                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kurir</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Kode Pos</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($kurir as $isi) { ?>

                                <tr>
                                    <td><?php echo $isi->id ?></td>
                                    <td><?php echo $isi->namakurir ?></td>
                                    <td><?php echo $isi->alamat ?></td>
                                    <td><?php echo $isi->kota ?></td>
                                    <td><?php echo $isi->kodepos ?></td>
                                    <td>
                                        <img width='50px' height='50px' 
                                             src="foto/<?php echo $isi->foto ?>">
                                    </td>
                                    <td>
                                        <a href="<?php echo URL::to('/kurir/edit/' . $isi->id) ?>"><button class="btn btn-info"><i class="glyphicon glyphicon-pencil">Edit</i></button></a>
                                        <a href="<?php echo URL::to('/kurir/delete/' . $isi->id); ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash">Delete</i></button></a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>

                    <a href="<?php echo URL::to('/kurir/add') ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plus">Tambah</i></button></a>
<?php // echo $kurir->links(); ?>
                    @stop