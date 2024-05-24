<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="#">
                        <img src="{{ asset('src\assets\img\logo_cbc.png') }}" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="#" class="nav-link"> FNCACT </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu  {{ request()->routeIs('getHome') ? 'active' : '' }}">
                <a href="{{ route('getHome') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Accueil</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ request()->routeIs('shipper.home') ? 'active' : '' }}  {{ request()->routeIs('shipper.getForm') ? 'active' : '' }} {{ request()->routeIs('shipper.getFormUpdate') ? 'active' : '' }}">
                <a href="{{ route('shipper.home') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Chargeur</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('carrier.home') ? 'active' : '' }}{{ request()->routeIs('carrier.getForm') ? 'active' : '' }} {{ request()->routeIs('carrier.getFormUpdate') ? 'active' : '' }}">
                <a href="{{ route('carrier.home') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <span>Transporteur</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('auxiliary.home') ? 'active' : '' }} {{ request()->routeIs('auxiliary.getForm') ? 'active' : '' }} {{ request()->routeIs('auxiliary.getFormUpdate') ? 'active' : '' }}">
                <a href="{{ route('auxiliary.home') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <span>Auxiliaire</span>
                    </div>
                </a>
            </li>
            @if(session('fk_groupe')==1)
                <li class="menu {{ request()->routeIs('tools.home') ? 'active' : '' }} {{ request()->routeIs('auth.home') ? 'active' : '' }} {{ request()->routeIs('auth.getForm') ? 'active' : '' }} {{ request()->routeIs('auth.getFormUpdate') ? 'active' : '' }} {{ request()->routeIs('groupe.home') ? 'active' : '' }} {{ request()->routeIs('groupe.getForm') ? 'active' : '' }} {{ request()->routeIs('groupe.getFormUpdate') ? 'active' : '' }} ">
                    <a href="#auxiliaire" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            <span>Outils</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="auxiliaire" data-bs-parent="#accordionExample">

                        <li class="menu {{ request()->routeIs('auth.home') ? 'active' : '' }} {{ request()->routeIs('auth.getForm') ? 'active' : '' }} {{ request()->routeIs('auth.getFormUpdate') ? 'active' : '' }}">
                            <a href="{{ route('auth.home') }}" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" wid th="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    <span>Utilisateur</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <ul class="collapse submenu list-unstyled" id="auxiliaire" data-bs-parent="#accordionExample">

                        <li class="menu {{ request()->routeIs('groupe.home') ? 'active' : '' }} {{ request()->routeIs('groupe.getForm') ? 'active' : '' }} {{ request()->routeIs('groupe.getFormUpdate') ? 'active' : '' }}">
                            <a href="{{ route('groupe.home') }}" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" wid th="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    <span>Groupe</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <ul class="collapse submenu list-unstyled" id="auxiliaire" data-bs-parent="#accordionExample">

                        <li class="menu">
                            <a href="{{ route('stat') }}" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" wid th="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    <span>Statistique</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </nav>
</div>
