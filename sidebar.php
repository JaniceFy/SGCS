 <!-- sidebar @s -->
 <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
     <div class="nk-sidebar-element nk-sidebar-head">
         <div class="nk-menu-trigger">
             <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
             <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
         </div>
         <div class="nk-sidebar-brand">
             <a href="dashboard.php" class="logo-link nk-sidebar-logo">
                 <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                 <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
             </a>
         </div>
     </div><!-- .nk-sidebar-element -->
     <div class="nk-sidebar-element nk-sidebar-body">
         <div class="nk-sidebar-content">
             <div class="nk-sidebar-menu" data-simplebar>
                 <ul class="nk-menu">
                     <li class="nk-menu-item">
                         <a href="dashboard.php" class="nk-menu-link">
                             <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                             <span class="nk-menu-text">Dashboard</span>
                         </a>
                     </li><!-- .nk-menu-item -->
                     <li class="nk-menu-item has-sub">
                         <a href="#" class="nk-menu-link nk-menu-toggle">
                             <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                             <span class="nk-menu-text">Clientes</span>
                         </a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item">
                                 <a href="RegistrarCliente.php" class="nk-menu-link"><span class="nk-menu-text">Registrar Cliente</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Listado de Clientes</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Historial de Servicios</span></a>
                             </li>
                         </ul><!-- .nk-menu-sub -->
                     </li><!-- .nk-menu-item -->
                     <!-- <li class="nk-menu-item">
                         <a href="html/crm/customer-list.html" class="nk-menu-link">
                             <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                             <span class="nk-menu-text">Gestión de Dispositivos</span>
                         </a>
                     </li> -->
                     <!-- .nk-menu-item -->
                     <li class="nk-menu-item has-sub">
                         <a href="#" class="nk-menu-link nk-menu-toggle">
                             <span class="nk-menu-icon"><em class="fas fa-laptop"></em></span>
                             <span class="nk-menu-text">Dispositivos</span>
                         </a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Registrar Dispositivo</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Listado de Dispositivos</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Historial de Reparaciones</span></a>
                             </li>
                         </ul><!-- .nk-menu-sub -->
                     </li><!-- .nk-menu-item -->
                     <li class="nk-menu-item has-sub">
                         <a href="#" class="nk-menu-link nk-menu-toggle">
                             <span class="nk-menu-icon"><em class="icon ni ni-file-text"></em></span>
                             <span class="nk-menu-text">Formatos de Recepción</span>
                         </a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Nuevo Formato</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Listado de Formatos</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Impresión o Exportación</span></a>
                             </li>
                         </ul><!-- .nk-menu-sub -->
                     </li><!-- .nk-menu-item -->
                     <li class="nk-menu-item has-sub">
                         <a href="#" class="nk-menu-link nk-menu-toggle">
                             <span class="nk-menu-icon"><em class="icon ni ni-bell"></em></span>
                             <span class="nk-menu-text">Notificaciones</span>
                         </a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Historial de Notificaciones</span></a>
                             </li>
                         </ul><!-- .nk-menu-sub -->
                     </li><!-- .nk-menu-item -->
                     <li class="nk-menu-item has-sub">
                         <a href="#" class="nk-menu-link nk-menu-toggle">
                             <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                             <span class="nk-menu-text">Reportes</span>
                         </a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Reportes de Clientes</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Reportes de Dispositivos</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Ingresos por Servicios</span></a>
                             </li>
                         </ul><!-- .nk-menu-sub -->
                     </li><!-- .nk-menu-item -->
                     <li class="nk-menu-item has-sub">
                         <a href="#" class="nk-menu-link nk-menu-toggle">
                             <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                             <span class="nk-menu-text">Configuración</span>
                         </a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Gestión de Usuarios</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Roles y Permisos</span></a>
                             </li>
                             <li class="nk-menu-item">
                                 <a href="blank.php" class="nk-menu-link"><span class="nk-menu-text">Parámetros Generales</span></a>
                             </li>
                         </ul><!-- .nk-menu-sub -->
                     </li><!-- .nk-menu-item -->
                     
                     
                    
                 </ul><!-- .nk-menu -->
             </div><!-- .nk-sidebar-menu -->
         </div><!-- .nk-sidebar-content -->
     </div><!-- .nk-sidebar-element -->
 </div>
 <!-- sidebar @e -->