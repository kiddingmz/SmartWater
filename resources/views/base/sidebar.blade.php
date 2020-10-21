<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{asset('assets/images/faces/face29.png')}}" alt="image">
                    <span class="sidebar-status-indicator"></span>
                </div>
                <div class="sidebar-profile-name">
                    <p class="sidebar-name">
                        {{auth()->user()->name}}
                    </p>
                    <p class="sidebar-designation">
                        Administrador III
                    </p>
                </div>
            </div>
            <div class="nav-search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                    <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                    </div>
                </div>
            </div>
            <p class="sidebar-menu-title">Dash menu</p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="typcn typcn-briefcase menu-icon"></i>
                <span class="menu-title">Transações</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/incomes"> Entradas </a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/costs"> Saídas </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="typcn typcn-film menu-icon"></i>
                <span class="menu-title">Integrações</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/admin/mpesa">Mpesa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/visa">Visa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/master-card">Master Card</a></li>

                </ul>
            </div>
        </li>
    </ul>
</nav>
