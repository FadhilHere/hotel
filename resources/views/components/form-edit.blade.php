@props(['action'])
<form action="{{ $action }}" class="card card-primary" method="post">
    <div class="card-header">
        <i class="fas fa-edit"></i> Edit
    </div>
    <div class="card-body">
        @method('put')
        <?= $slot ?>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit">
            Update
        </button>
    </div>
</form>