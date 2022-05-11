@extends('layouts.admin', ['title'=>'Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>List Kamar</h1>
@endsection

@section('content-main')
<x-status-create />

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ ucwords($row->nama_kamar)  }}</td>
                    <td>{{ $row->jumlah_kamar }}</td>
                    <td>Rp. {{ number_format($row->harga_kamar,2,',','.') }}</td>
                    <td>
                        @can('role', 'admin')
                        <x-btn-edit :link="route('kamar.edit',['kamar'=>$row->id])" />
                        <x-btn-delete :link="route('kamar.destroy',['kamar'=>$row->id])" />
                        @endcan
                    </td>
                </tr>.
                @endforeach
            </tbody>

        </table>
        <a href="{{ route('kamar.create') }}" class="btn btn-primary">Tambah</a>
    </div>

</div>
@endsection

@can('role', 'admin')
<x-modal-delete />
@endcan