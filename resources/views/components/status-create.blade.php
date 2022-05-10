@if ( session('status') == 'store')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Simpan!</strong> Data telah berhasil disimpan.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if ( session('status') == 'update')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Diupdate!</strong> Data telah berhasil disimpan.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif