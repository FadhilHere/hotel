@extends('layouts.admin', ['title'=>'Edit Admin'])


@section('content-header')
<h1 class="m-0"><i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content-main')
<div class="row">
    <div class="col-6">
        <x-form-edit :action="route('admin.update', ['admin'=>$row->id])">
            <x-input-create label="Nama Anda" name="nama" :value="$row->nama" />
            <x-input-create label="Email" name="email" :value="$row->email" />
            <!-- <x-input-create label="Role" name="role" /> -->
            <x-input-create label="Password" name="password" type="password" />
        </x-form-edit>
    </div>
</div>

@endsection