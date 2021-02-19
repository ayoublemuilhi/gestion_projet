<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
       <!--  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>-->
       <span class="brand-text font-weight-light">Indicateur Performance <span class="badge badge-success"></span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth::user()->image  == '')
                    <img src="{{ url('/admin/img/admin_img/default-user.png') }}" class="img-circle elevation-2" alt="User Image">
                @else

                @endif

            </div>
            <div class="info">
                <a href="#" class="d-block">ayoub</a>
                <span class="badge badge-success">online</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="fas fa-desktop"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bezier-curve"></i>
                        <p>
                            secteurs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="{{route('secteurs')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir tout</p>
                            </a>
                        </li>



                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bullseye"></i>
                        <p>
                            Objectifs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="{{route('objectifs')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir tout</p>
                            </a>
                        </li>



                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>
                            Indicateurs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="{{route('indicateurs')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir tout</p>
                            </a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fab fa-dashcube"></i>
                        <p>
                            Unites
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="{{route('unites')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir tout</p>
                            </a>
                        </li>



                    </ul>
                </li>

            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
