<div class="bg-white mr-0 header-nav shadow-sm collapse" id="sidebarCollapse" style="height: auto;">
    <section class="sidebar" style="min-height: 100%">
        <ul class="nav text-white flex-column nav-pills mt-3" id="accordion" role="tablist" aria-orientation="vertical">

            <li class="nav-item header header-title p-2 ">
                <span>MENU PRINCIPAL</span>
            </li>

            <!-- Dashboard -->
            <li class="nav-item dash">
                <a class="nav-link" href="#">
                    <i class="fas fa-tachometer-alt"></i>

                    <span class="ml-1">Dashboard</span>
                </a>
            </li>

            <!-- Cashier -->
            <li class="nav-item dash">
                <a class="nav-link" href="#cashierSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="cashierSubMenu">
                    <i class="fas fa-cash-register"></i>

                    <span class="ml-1">Caja</span>

                    <span class="float-right"><i class="fa fa-angle-left pull-right"></i></span>
                </a>

                <ul class="collapse list-unstyled" id="cashierSubMenu" data-parent="#accordion">
                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-balance-scale"></i>

                            <span class="ml-1">Administrar Caja</span>
                        </a>
                    </li>

                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-hand-holding-usd"></i>

                            <span class="ml-1">Registrar Venta</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- StockController -->
            <li class="nav-item">
                <a class="nav-link" href="#stockSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="stockSubMenu">
                    <i class="fas fa-boxes"></i>

                    <span class="ml-1">Stock</span>

                    <span class="float-right"><i class="fa fa-angle-left pull-right"></i></span>
                </a>

                <ul class="collapse list-unstyled" id="stockSubMenu" data-parent="#accordion">
                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-clipboard-list"></i>

                            <span class="ml-1">Lista de Productos</span>
                        </a>
                    </li>

                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-clipboard-list"></i>

                            <span class="ml-1">Listado de Stock</span>
                        </a>
                    </li>

                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-dolly-flatbed"></i>

                            <span class="ml-1">Carga de Stock</span>
                        </a>
                    </li>

                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-wrench"></i>

                            <span class="ml-1">Ajuste de Stock</span>
                        </a>
                    </li>

                    <li class="ml-3" hidden>
                        <a class="nav-link" href="#">
                            <i class="fas fa-calculator"></i>

                            <span class="ml-1">Arqueo de Productos</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Administration -->
            <li class="nav-item">
                <a class="nav-link" href="#admSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="admSubMenu">
                    <i class="fas fa-users-cog"></i>

                    <span class="ml-1">Administracion</span>

                    <span class="float-right"><i class="fa fa-angle-left pull-right"></i></span>
                </a>

                <ul class="collapse list-unstyled" id="admSubMenu" data-parent="#accordion">
                    <li class="ml-3">
                        <a class="nav-link" href="#">
                            <i class="fas fa-file-invoice"></i>

                            <span class="ml-1">Gastos</span>
                        </a>
                    </li>

                    <li class="ml-3">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <i class="fas fa-users"></i>

                            <span class="ml-1">Usuarios</span>
                        </a>
                    </li>

                    <li class="ml-3">
                        <a class="nav-link" href="{{ route('roles.index') }}">
                            <i class="fas fa-user-tag"></i>

                            <span class="ml-1">Roles</span>
                        </a>
                    </li>

                    <li class="ml-3" hidden>
                        <a class="nav-link" href="{{ route('permissions.index') }}">
                            <i class="fas fa-tags"></i>

                            <span class="ml-1">Permisos</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Reports -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-clipboard"></i>

                    <span class="ml-1">Reportes</span>
                </a>
            </li>

            <!-- Support -->
            <li class="nav-item dash" hidden>
                <a class="nav-link" href="#">
                    <i class="fas fa-headset"></i>

                    <span class="ml-1">Soporte</span>
                </a>
            </li>

            <!-- Logout -->
            <li class="nav-item dash">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>

                    <span class="ml-1">Cerrar Sesion</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </section>
</div>

