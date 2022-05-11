@extends('layouts.admin',['title'=>'Tambah Kamar'])

@section('content-header')
<h1 class="m-0"><a class="btn" onclick="history.back()"><i class="fas fa-arrow-left" style="font-size: 25px;"></i></a>
    <i class="fas fa-bed"></i> Kamar
</h1>
@endsection

@section('content-main')
<div class="row">
    <div class="col-6">
        <x-form-create :action="route('kamar.store')" :upload="true">
            <x-input-create label="Nama Kamar / Type Kamar" name="nama_kamar" />
            <x-input-create label="Foto" name="foto_kamar" type="file"
                keterangan="Foto bertipe : png, jpg, jpeg. Dimensi : min width 1000px, min height 500px. min 50kb, max 2mb." />
            <x-input-create label="Jumlah" name="jumlah_kamar" type="number" />
            <x-input-create label="Harga" name="harga_kamar" type="number" />
            <x-textarea label="Deskripsi" name="deskripsi_kamar" />
        </x-form-create>
    </div>
</div>
@endsection