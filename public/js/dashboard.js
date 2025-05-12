// Esperar a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dashboard POS cargado correctamente');
    // Datos de ejemplo para el dashboard
    const dashboardData = {
        summaryCards: [
            { title: 'Ventas Hoy', value: '$12,450', change: '+12% vs ayer', icon: 'bx-trending-up', color: 'green' },
            { title: 'Clientes Nuevos', value: '8', change: '+15% vs ayer', icon: 'bx-user-plus', color: 'blue' },
            { title: 'Productos Bajos', value: '15', change: 'Requiere atención', icon: 'bx-error-circle', color: 'yellow' },
            { title: 'Órdenes Pendientes', value: '4', change: 'Por procesar', icon: 'bx-time', color: 'red' }
        ],
        quickActions: [
            { title: 'Nueva Venta', icon: 'bx-cart-add', color: 'blue' },
            { title: 'Agregar Producto', icon: 'bx-package', color: 'green' },
            { title: 'Nuevo Cliente', icon: 'bx-user-plus', color: 'blue' },
            { title: 'Nuevo Proveedor', icon: 'bx-truck', color: 'purple' },
            { title: 'Reportes', icon: 'bx-bar-chart-alt-2', color: 'yellow' },
            { title: 'Configuración', icon: 'bx-cog', color: 'red' }
        ],
        recentActivity: [
            { 
                title: 'Nueva venta realizada', 
                description: 'Venta #1245 por $1,250.00', 
                time: 'Hace 15 minutos', 
                icon: 'bx-cart', 
                color: 'green' 
            },
            { 
                title: 'Nuevo cliente registrado', 
                description: 'Juan Pérez (juan@example.com)', 
                time: 'Hace 1 hora', 
                icon: 'bx-user', 
                color: 'blue' 
            },
            { 
                title: 'Stock bajo detectado', 
                description: 'Producto "Cafetera Oster" bajo stock (2 unidades)', 
                time: 'Hace 3 horas', 
                icon: 'bx-error-circle', 
                color: 'yellow' 
            }
        ]
    };

    // Funcionalidad para los botones de acción rápida
    const actionButtons = document.querySelectorAll('.action-btn');
    actionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const actionName = this.querySelector('span').textContent;
            alert(`Has seleccionado: ${actionName}`);
        });
    });

    // Funcionalidad para el botón "Ver toda la actividad"
    const viewAllBtn = document.querySelector('.view-all-btn');
    if (viewAllBtn) {
        viewAllBtn.addEventListener('click', function() {
            alert('Mostrando todas las actividades');
        });
    }

    // Funcionalidad para los elementos del menú lateral
    const menuItems = document.querySelectorAll('.sidebar-menu li a');
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault(); // Prevenir navegación
            
            // Remover clase active de todos los elementos
            menuItems.forEach(menuItem => {
                menuItem.parentElement.classList.remove('active');
            });
            
            // Agregar clase active al elemento seleccionado
            this.parentElement.classList.add('active');
            
            // Mostrar mensaje con la sección seleccionada
            const menuText = this.textContent.trim();
            alert(`Has seleccionado la sección: ${menuText}`);
        });
    });

    // Funcionalidad para el botón de cerrar sesión
    const logoutBtn = document.querySelector('.logout-btn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            if (confirm('¿Estás seguro que deseas cerrar sesión?')) {
                alert('Sesión cerrada');
            }
        });
    }

    // Funcionalidad para los iconos de notificación y mensajes
    const notificationBtn = document.querySelector('.notification');
    const messageBtn = document.querySelector('.message');
    
    if (notificationBtn) {
        notificationBtn.addEventListener('click', function() {
            alert('Tienes 3 notificaciones nuevas');
        });
    }
    
    if (messageBtn) {
        messageBtn.addEventListener('click', function() {
            alert('Tienes 2 mensajes sin leer');
        });
    }

    // Simulación de actualización de datos en tiempo real
    function actualizarDatos() {
        // Actualizar ventas (valor aleatorio entre $12,000 y $13,000)
        const ventasHoy = document.querySelector('.summary-cards .card:nth-child(1) .card-value');
        if (ventasHoy) {
            const nuevoValor = 12000 + Math.floor(Math.random() * 1000);
            ventasHoy.textContent = `$${nuevoValor.toLocaleString()}`;
        }
        
        // Actualizar clientes nuevos (valor aleatorio entre 7 y 10)
        const clientesNuevos = document.querySelector('.summary-cards .card:nth-child(2) .card-value');
        if (clientesNuevos) {
            const nuevoValor = 7 + Math.floor(Math.random() * 4);
            clientesNuevos.textContent = nuevoValor.toString();
        }
        
        // Programar próxima actualización
        setTimeout(actualizarDatos, 5000); // Actualizar cada 5 segundos
    }
    
    // Iniciar simulación de datos en tiempo real
    actualizarDatos();
    
    // Añadir funcionalidad de búsqueda
    const searchInput = document.querySelector('.search-container input');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Buscando: ${this.value}`);
                this.value = '';
            }
        });
    }
    
    // Añadir efecto hover a las tarjetas de resumen
    const summaryCards = document.querySelectorAll('.summary-cards .card');
    summaryCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
            this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '';
        });
    });
});