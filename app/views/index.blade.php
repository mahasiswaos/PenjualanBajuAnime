@extends('layout.bootstrap3.index')

@section('content')

<div class="container" style="margin-top: 20px">
    <ul class="nav nav-pills">
        <li class="active"><a href="<?php echo URL::to('/') ?>">
                Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" 
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

