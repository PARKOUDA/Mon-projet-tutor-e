<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (auth('enseignant')->check())
            @if (auth('enseignant')->user()->role == "admin" )
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.index') ? 'color' : '' }}" 
                    href="{{ route('admin.index') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.listes.personnels') ? 'color' : '' }}"
                    href="{{ route('admin.listes.personnels') }}">
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                    <span class="menu-title">Personnels</span>
                </a>
            </li>
    
            <li class="dropdown-center nav-item">
                <a class="dropdown-toggle nav-link {{ request()->routeIs('admin.services.departements') ? 'color' : '' }} 
            {{ request()->routeIs('admin.services.emplois') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.faos') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.fonctions') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.grades') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.structures') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.titres') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.ufrs') ? 'color' : '' }}"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-animation menu-icon"></i>
                    Gestions
                </a>
                <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.departements') ? 'active' : '' }}"
                            href="{{ route('admin.services.departements') }}">Départements</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.emplois') ? 'active' : '' }}"
                            href="{{ route('admin.services.emplois') }}">Emplois</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.faos') ? 'active' : '' }}"
                            href="{{ route('admin.services.faos') }}">Fonction Administrative Occupée</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.fonctions') ? 'active' : '' }}"
                            href="{{ route('admin.services.fonctions') }}">Fonction</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.grades') ? 'active' : '' }}"
                            href="{{ route('admin.services.grades') }}">Grade</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.structures') ? 'active' : '' }}"
                            href="{{ route('admin.services.structures') }}">Structure</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.titres') ? 'active' : '' }}"
                            href="{{ route('admin.services.titres') }}">Titre</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.ufrs') ? 'active' : '' }}"
                            href="{{ route('admin.services.ufrs') }}">Ufr</a></li>
                </ul>
            </li>
    
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.personnel.profil') ? 'color' : '' }}"
                    href="{{ route('admin.personnel.profil') }}">
                    <i class="mdi mdi-account-box-outline menu-icon"></i>
                    <span class="menu-title">Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.personnel.profil') ? 'color' : '' }}"
                    href="/">
                    <i class="mdi mdi-undo-variant menu-icon"></i>
                    <span class="menu-title">Accueil</span>
                </a>
            </li>
            @endif

           
            @if (auth('enseignant')->user()->role == "user" )
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('enseignant.profil') ? 'color' : '' }}"
                    href="{{ route('enseignant.profil') }}">
                    <i class="mdi mdi-account-box-outline menu-icon"></i>
                    <span class="menu-title">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.index') ? 'color' : '' }}" href="/">
                    <i class="mdi mdi-undo-variant menu-icon"></i>
                    <span class="menu-title">Accueil</span>
                </a>
            </li>
            @endif

        @elseif (auth('atos')->check())
            @if (auth('atos')->user()->role == "admin" )
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.index') ? 'color' : '' }}" href="{{ route('admin.index') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.listes.personnels') ? 'color' : '' }}"
                    href="{{ route('admin.listes.personnels') }}">
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                    <span class="menu-title">Personnels</span>
                </a>
            </li>
            <li class="dropdown-center nav-item">
                <a class="dropdown-toggle nav-link {{ request()->routeIs('admin.services.departements') ? 'color' : '' }} 
            {{ request()->routeIs('admin.services.emplois') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.faos') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.fonctions') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.grades') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.structures') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.titres') ? 'color' : '' }}
            {{ request()->routeIs('admin.services.ufrs') ? 'color' : '' }}"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-animation menu-icon"></i>
                    Gestion
                </a>
                <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.departements') ? 'active' : '' }}"
                            href="{{ route('admin.services.departements') }}">Départements</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.emplois') ? 'active' : '' }}"
                            href="{{ route('admin.services.emplois') }}">Emplois</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.faos') ? 'active' : '' }}"
                            href="{{ route('admin.services.faos') }}">Fonction Administrative Occupée</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.fonctions') ? 'active' : '' }}"
                            href="{{ route('admin.services.fonctions') }}">Fonction</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.grades') ? 'active' : '' }}"
                            href="{{ route('admin.services.grades') }}">Grade</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.structures') ? 'active' : '' }}"
                            href="{{ route('admin.services.structures') }}">Structure</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.titres') ? 'active' : '' }}"
                            href="{{ route('admin.services.titres') }}">Titre</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('admin.services.ufrs') ? 'active' : '' }}"
                            href="{{ route('admin.services.ufrs') }}">Ufr</a></li>
                </ul>
            </li>
    
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('atos.profil') ? 'color' : '' }}"
                    href="{{ route('atos.profil') }}">
                    <i class="mdi mdi-account-box-outline menu-icon"></i>
                    <span class="menu-title">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.index') ? 'color' : '' }}" href="/">
                    <i class="mdi mdi-undo-variant menu-icon"></i>
                    <span class="menu-title">Accueil</span>
                </a>
            </li> 
            @endif
    
            @if (auth('atos')->user()->role == "user")
            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('atos.profil') ? 'color' : '' }}"
                href="{{ route('atos.profil') }}">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.index') ? 'color' : '' }}" href="/">
                    <i class="mdi mdi-undo-variant menu-icon"></i>
                    <span class="menu-title">Accueil</span>
                </a>
            </li> 
            @endif
        @endif
    </ul>
</nav>