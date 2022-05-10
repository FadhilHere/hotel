@extends('layouts.admin', ['title'=>'User Admin'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content-main')

<x-status-create />

<div class="card">
    <div class="card-body p-0">

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->role }}</td>
                    <td>
                        <x-btn-edit :link="route('admin.edit',['admin'=>$row->id])" />
                    </td>
                </tr>.
                @endforeach
            </tbody>

        </table>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah</a>
    </div>

</div>
@endsection