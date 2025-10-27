<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Admin Mata Verde</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f5f7fa;
        }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            transition: all 0.3s;
            font-size: 0.9rem;
        }
        .sidebar .nav-link:hover {
            color: white;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
        }
        .sidebar .nav-link.active {
            color: white;
            background: rgba(255,255,255,0.2);
            border-radius: 5px;
        }
        .main-content {
            padding: 30px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        .brand-color {
            color: #28a745;
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        /* Mobile Styles */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 280px;
                z-index: 1000;
                transition: left 0.3s;
            }
            .sidebar.show {
                left: 0;
            }
            .sidebar-backdrop {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                z-index: 999;
            }
            .sidebar-backdrop.show {
                display: block;
            }
            .main-content {
                padding: 15px;
            }
            .navbar-brand {
                font-size: 1rem;
            }
            .card-body {
                padding: 1rem;
            }
            .table {
                font-size: 0.85rem;
            }
            .btn-sm {
                padding: 0.25rem 0.5rem;
                font-size: 0.8rem;
            }
            .nav-link .badge {
                font-size: 0.7rem;
            }
        }
        
        /* Tablet Styles */
        @media (min-width: 769px) and (max-width: 991px) {
            .sidebar {
                min-height: 100vh;
            }
            .main-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Sidebar Backdrop -->
    <div class="sidebar-backdrop" onclick="toggleSidebar()"></div>
    
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-md-2 col-lg-2 px-0">
                <div class="sidebar p-3" id="sidebar">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="text-center flex-grow-1">
                            <h4 class="fw-bold mb-1"><i class="fas fa-leaf"></i> Mata Verde</h4>
                            <small class="text-light">Painel Administrativo</small>
                        </div>
                        <button class="btn btn-link text-white d-md-none p-0" onclick="toggleSidebar()" style="font-size: 1.5rem;">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <nav class="nav flex-column">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-home me-2"></i> Dashboard
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.quotations.*') ? 'active' : '' }}" href="{{ route('admin.quotations.index') }}">
                            <i class="fas fa-file-invoice me-2"></i> Orçamentos
                            @if(\App\Quotation::where('is_read', false)->count() > 0)
                                <span class="badge bg-danger ms-1">{{ \App\Quotation::where('is_read', false)->count() }}</span>
                            @endif
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.representants.*') ? 'active' : '' }}" href="{{ route('admin.representants.index') }}">
                            <i class="fas fa-users me-2"></i> Representantes
                            @if(\App\Representant::where('is_read', false)->count() > 0)
                                <span class="badge bg-danger ms-1">{{ \App\Representant::where('is_read', false)->count() }}</span>
                            @endif
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
                            <i class="fas fa-envelope me-2"></i> Contatos
                            @if(\App\Contact::where('is_read', false)->count() > 0)
                                <span class="badge bg-danger ms-1">{{ \App\Contact::where('is_read', false)->count() }}</span>
                            @endif
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
                            <i class="fas fa-box me-2"></i> Produtos
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.testimonials.index') }}">
                            <i class="fas fa-comments me-2"></i> Depoimentos
                        </a>
                        <hr class="text-white-50">
                        <a class="nav-link" href="{{ route('front.index') }}" target="_blank">
                            <i class="fas fa-globe me-2"></i> Ver Site
                        </a>
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 col-lg-10 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white mb-0 mb-md-4 shadow-sm">
                    <div class="container-fluid px-3">
                        <div class="d-flex align-items-center w-100">
                            <button class="btn btn-link text-dark d-md-none me-2" onclick="toggleSidebar()" style="font-size: 1.5rem;">
                                <i class="fas fa-bars"></i>
                            </button>
                            <span class="navbar-brand mb-0 h1 flex-grow-1">@yield('title')</span>
                            <div class="d-none d-md-flex align-items-center">
                                <span class="me-3"><i class="fas fa-user-circle"></i> {{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="main-content">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.querySelector('.sidebar-backdrop');
            
            sidebar.classList.toggle('show');
            backdrop.classList.toggle('show');
        }
        
        // Close sidebar when clicking outside
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.querySelector('.sidebar-backdrop');
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isMenuButton = event.target.closest('button[onclick="toggleSidebar()"]');
            
            if (!isClickInsideSidebar && !isMenuButton && sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
                backdrop.classList.remove('show');
            }
        });
    </script>
</body>
</html>

