@props(['action'])
<form action="{{ $action }}" class="card card-primary" method="post">
    <div class="card-header">
        <i class="fas fa-plus-circle"></i> Tambah
    </div>
    <div class="card-body">
        <?= $slot ?>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit">
            Simpan
        </button>
    </div>
</form>