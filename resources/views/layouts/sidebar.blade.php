<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel" style="margin-left: 5px">
            <div class="pull-left image">
                <img src="{{ asset('user.png') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info" style="margin-left: 5px">
                <p>{{ \Auth::user()->name  }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group" >
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span style="margin-left: 10px">Dashboard</span></a></li>
            <li class="active"><a href="{{ route('user.index') }}"><i class="fa fa-users"></i> <span style="margin-left: 10px">Users</span></a></li>
            <li class="active"><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i> <span style="margin-left: 10px">Kategori</span></a></li>
            <li class="active"><a href="{{ route('products.index') }}"><i class="fa fa-cubes"></i> <span style="margin-left: 10px">Product</span></a></li>
            <li class="active"><a href="{{ route('customers.index') }}"><i class="fa fa-users"></i> <span style="margin-left: 10px">Customer</span></a></li>
            <li class="active"><a href="{{ route('sales.index') }}"><i class="fa fa-cart-plus"></i> <span style="margin-left: 10px">Penjualan</span></a></li>
            <li class="active"><a href="{{ route('suppliers.index') }}"><i class="fa fa-truck"></i> <span style="margin-left: 10px">Supplier</span></a></li>
            <li class="active"><a href="{{ route('productsOut.index') }}"><i class="fa fa-minus"></i> <span style="margin-left: 10px">Product Keluar</span></a></li>
            <li class="active"><a href="{{ route('productsIn.index') }}"><i class="fa fa-plus"></i> <span style="margin-left: 10px">Product Masuk</span></a></li>








        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
