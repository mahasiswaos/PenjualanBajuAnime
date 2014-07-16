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
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-home"></i> 
                    <b>Data Produk</b>
                </div>
                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Jenis Kain</th>
                                <th>Warna</th>
                                <th>Ukuran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($produk as $isi) { ?>

                                <tr>
                                    <td><?php echo $isi->id ?></td>
                                    <td><?php echo $isi->namaproduk ?></td>
                                    <td><?php echo $isi->jeniskain ?></td>
                                    <td><?php echo $isi->warna ?></td>
                                    <td><?php echo $isi->ukuran ?></td>
                                    <td>
                                        <a href="<?php echo URL::to('/produk/edit/' . $isi->id) ?>"><button class="btn btn-info"><i class="glyphicon glyphicon-pencil">Edit</i></button></a>
                                        <a href="<?php echo URL::to('/produk/delete/' . $isi->id); ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash">Delete</i></button></a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>

                    <a href="<?php echo URL::to('/produk/add') ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plus">Tambah</i></button></a>

                    @stop