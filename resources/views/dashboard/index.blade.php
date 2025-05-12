<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System Pro - Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css') }}">
    <!-- Iconos de Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo-container">
                    <div class="logo-icon"><i class='bx bx-package'></i></div>
                    <h2>POS System Pro</h2>
                </div>
            </div>

            <div class="user-info">
                <div class="user-avatar">A</div>
                <div class="user-details">
                    <div class="user-name">Bienvenido(a), Admin</div>
                    <div class="user-role">Administrador</div>
                </div>
            </div>

            <nav class="sidebar-menu">
                <ul>
                    <li class="active"><a href="#"><i class='bx bx-grid-alt'></i> Dashboard</a></li>
                    <li><a href="#"><i class='bx bx-cart'></i> Ventas</a></li>
                    <li><a href="#"><i class='bx bx-package'></i> Inventario</a></li>
                    <li><a href="#"><i class='bx bx-user'></i> Clientes</a></li>
                    <li><a href="#"><i class='bx bx-truck'></i> Proveedores</a></li>
                    <li><a href="#"><i class='bx bx-bar-chart-alt-2'></i> Reportes</a></li>
                    <li><a href="#"><i class='bx bx-cog'></i> Configuración</a></li>
                </ul>
            </nav>

            <div class="sidebar-footer">
                <button class="logout-btn"><i class='bx bx-log-out'></i> Cerrar sesión</button>
            </div>
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-title">
                    <h1>Dashboard</h1>
                </div>
                <div class="header-actions">
                    <div class="search-container">
                        <i class='bx bx-search'></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    <div class="header-icons">
                        <button class="icon-btn notification">
                            <i class='bx bx-bell'></i>
                            <span class="badge"></span>
                        </button>
                        <button class="icon-btn message">
                            <i class='bx bx-message-square-detail'></i>
                            <span class="badge"></span>
                        </button>
                        <button class="user-avatar-small">A</button>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="dashboard-header">
                    <h2>Dashboard</h2>
                    <p>Resumen de actividades y estadísticas</p>
                </div>

                <!-- Summary Cards -->
                <div class="summary-cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-info">
                                <p class="card-title">Ventas Hoy</p>
                                <h3 class="card-value">$12,450</h3>
                                <p class="card-change">+12% vs ayer</p>
                            </div>
                            <div class="card-icon green">
                                <i class='bx bx-trending-up'></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-info">
                                <p class="card-title">Clientes Nuevos</p>
                                <h3 class="card-value">8</h3>
                                <p class="card-change">+15% vs ayer</p>
                            </div>
                            <div class="card-icon blue">
                                <i class='bx bx-user-plus'></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-info">
                                <p class="card-title">Productos Bajos</p>
                                <h3 class="card-value">15</h3>
                                <p class="card-change">Requiere atención</p>
                            </div>
                            <div class="card-icon yellow">
                                <i class='bx bx-error-circle'></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-info">
                                <p class="card-title">Órdenes Pendientes</p>
                                <h3 class="card-value">4</h3>
                                <p class="card-change">Por procesar</p>
                            </div>
                            <div class="card-icon red">
                                <i class='bx bx-time'></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions-section">
                    <h2 class="section-title">Acciones Rápidas</h2>
                    <div class="quick-actions">
                        <button class="action-btn">
                            <div class="action-icon blue">
                                <i class='bx bx-cart-add'></i>
                            </div>
                            <span>Nueva Venta</span>
                        </button>
                        <button class="action-btn">
                            <div class="action-icon green">
                                <i class='bx bx-package'></i>
                            </div>
                            <span>Agregar Producto</span>
                        </button>
                        <button class="action-btn">
                            <div class="action-icon blue">
                                <i class='bx bx-user-plus'></i>
                            </div>
                            <span>Nuevo Cliente</span>
                        </button>
                        <button class="action-btn">
                            <div class="action-icon purple">
                                <i class='bx bx-truck'></i>
                            </div>
                            <span>Nuevo Proveedor</span>
                        </button>
                        <button class="action-btn">
                            <div class="action-icon yellow">
                                <i class='bx bx-bar-chart-alt-2'></i>
                            </div>
                            <span>Reportes</span>
                        </button>
                        <button class="action-btn">
                            <div class="action-icon red">
                                <i class='bx bx-cog'></i>
                            </div>
                            <span>Configuración</span>
                        </button>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="recent-activity-section">
                    <h2 class="section-title">Actividad Reciente</h2>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon green">
                                <i class='bx bx-cart'></i>
                            </div>
                            <div class="activity-details">
                                <h3 class="activity-title">Nueva venta realizada</h3>
                                <p class="activity-description">Venta #1245 por $1,250.00</p>
                                <p class="activity-time">Hace 15 minutos</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon blue">
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="activity-details">
                                <h3 class="activity-title">Nuevo cliente registrado</h3>
                                <p class="activity-description">Juan Pérez (juan@example.com)</p>
                                <p class="activity-time">Hace 1 hora</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon yellow">
                                <i class='bx bx-error-circle'></i>
                            </div>
                            <div class="activity-details">
                                <h3 class="activity-title">Stock bajo detectado</h3>
                                <p class="activity-description">Producto "Cafetera Oster" bajo stock (2 unidades)</p>
                                <p class="activity-time">Hace 3 horas</p>
                            </div>
                        </div>
                    </div>
                    <div class="view-all">
                        <button class="view-all-btn">Ver toda la actividad</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>