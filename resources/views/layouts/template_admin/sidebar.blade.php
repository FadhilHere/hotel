<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="/adminlte/dist/img/icon-hotel.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                <img src="/adminlte/dist/img/paspotopadil160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="#" class="d-block"> {{ Auth::user()->nama }}</a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('dashboard')" />
                @can('role', 'admin')
                <x-nav-item label="Kamar List" icon="fas fa-bed" :link="route('kamar.index')" />
                <x-nav-item label="User Admin" icon="fas fa-users" :link="route('admin.index')" />
                @endcan
            </ul>
        </nav>

    </div>

</aside>