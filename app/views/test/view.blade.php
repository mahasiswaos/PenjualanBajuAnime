@extends('layout.bootstrap3.index')

@section('content')



<div class="container" style="margin-top: 50px; width: 700px;">

    <div class="row">
        <!--<div class="panel-body"></div>-->
        <br/>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-home"></i> 
                    <b>Tabel Test</b>
                </div>
                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($test as $isi) { ?>

                                <tr>
                                    <td><?php echo $isi->id ?></td>
                                    <td><?php echo $isi->nama ?></td>
                                    <td><?php echo $isi->tanggal_lahir ?></td>
                                    <td>
                                        <a href="<?php echo URL::to('/test/edit/' . $isi->id) ?>"><button class="btn btn-info"><i class="glyphicon glyphicon-pencil">Edit</i></button></a>
                                        <a href="<?php echo URL::to('/test/delete/' . $isi->id); ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash">Delete</i></button></a>
                                    </td>
                                </tr>

                            <?php } ?>
                            <tr>


                            </tr>
                        </tbody>
                    </table>

                    <a href="<?php echo URL::to('/test/add') ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plus">Tambah</i></button></a>

                    @stop