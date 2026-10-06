<nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link"
                data-lte-toggle="sidebar"
                href="#"
                role="button"
                aria-label="Toggle sidebar"
              >
                <i class="bi bi-list"></i>
              </a>
            </li>

            <li class="nav-item d-none d-md-block">
              
            </li>
          </ul>
          <!--end::Start Navbar Links-->

          <!--begin::Navbar Search-->
          <form
            class="navbar-search d-none d-md-block ms-3"
            role="search"
            action="./pages/search-results.html"
          >
            <label for="navbar-search-input" class="visually-hidden">Search</label>
            <div class="navbar-search-field">
              <input
                type="search"
                id="navbar-search-input"
                name="q"
                class="form-control"
                placeholder="Search…"
                autocomplete="off"
              />
              <button class="navbar-search-submit" type="submit" aria-label="Submit search">
                <i class="bi bi-search" aria-hidden="true"></i>
              </button>
            </div>
          </form>
          <!--end::Navbar Search-->

          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Search (small screens: the field above is hidden, so link to the search page)-->
            <li class="nav-item d-md-none">
              <a class="nav-link" href="./pages/search-results.html" aria-label="Search">
                <i class="bi bi-search" aria-hidden="true"></i>
              </a>
            </li>
            <!--end::Search-->


            <!--begin::Color Segun Tema (#6010)-->
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                id="bd-theme"
                aria-label="Toggle color scheme"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-sun-fill" data-lte-theme-icon="light"></i>
                <i class="bi bi-moon-fill d-none" data-lte-theme-icon="dark"></i>
                <i class="bi bi-circle-half d-none" data-lte-theme-icon="auto"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="bd-theme"
                style="--bs-dropdown-min-width: 8rem"
              >
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="light"
                    aria-pressed="false"
                  >
                    <i class="bi bi-sun-fill me-2"></i>
                    Light
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="false"
                  >
                    <i class="bi bi-moon-fill me-2"></i>
                    Dark
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto"
                    aria-pressed="true"
                  >
                    <i class="bi bi-circle-half me-2"></i>
                    Auto
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
              </ul>
            </li>
            <!--end::Color Mode Toggle-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="<?php echo $URL;?>/public/imagenes/usuario.png"
                  class="user-image rounded-circle shadow"
                  alt="<?php echo $nombre_usuario_sesion; ?>"
                />
                <span class="d-none d-md-inline"><?php echo $nombre_usuario_sesion; ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-info">
                  <img
                    src="<?php echo $URL;?>/public/imagenes/usuario.png"
                    class="rounded-circle shadow"
                    alt="<?php echo $nombre_usuario_sesion; ?>"
                  />
                  <p>
                    <?php echo $nombre_usuario_sesion; ?> - <?php echo $rol_usuario_sesion ?>
                    <small>Miembro desde <?php echo $fyh_registro_usuario_sesion ?></small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <li class="user-body">
                 
                </li>
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-outline-secondary">Perfil</a>
                  <a href="login/cerrar_sesion.php" class="btn btn-outline-danger float-end">Cerrar Sesión</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>


      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="<?php echo $URL; ?>/principal.php" class="brand-link">
            <!--begin::Brand Image-->
            <img src="<?php echo $URL;?>/public/imagenes/logo.png" alt="SIS Parqueo" class="brand-image opacity-75 shadow"/>
            <span class="brand-text fw-light">SIS Parqueo</span>
          </a>
        </div>
        <div class="sidebar-search" role="search">
          <label for="sidebar-search-input" class="visually-hidden">Filter menu</label>
          <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filter menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
          />
          <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            No matching pages.
          </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false" id="navigation">
              
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person"></i>
                  <p>
                    Usuarios
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/usuarios/" class="nav-link">
                    <i class="bi bi-people-fill"></i>
                      <p>Listado de usuarios</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/usuarios/create.php" class="nav-link">
                    <i class="bi bi-person-add"></i>
                      <p>Agregar nuevo usuario</p>
                    </a>
                  </li>

                </ul>
              </li>
              
              
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person-rolodex"></i>
                  <p>
                    Roles
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/roles/" class="nav-link">
                    <i class="bi bi-receipt-cutoff"></i>
                      <p>Listado de roles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/roles/create.php" class="nav-link">
                    <i class="bi bi-file-earmark-plus"></i>
                      <p>Agregar nuevo rol</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/roles/asignar.php" class="nav-link">
                    <i class="bi bi-person-fill-up"></i>
                      <p>Asignar Rol</p>
                    </a>
                  </li>

                </ul>
              </li>


              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="bi bi-car-front-fill"></i>
                  <p>
                    Parqueo
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/parqueo/mapeo_de_vehiculos.php" class="nav-link">
                    <i class="bi bi-car-front"></i>
                      <p>Mapeo de Vehiculos</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/parqueo/create.php" class="nav-link">
                    <i class="bi bi-car-front"></i>
                      <p>Registro de espacios</p>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="bi bi-gear"></i>
                  <p>
                    Configuraciones
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL;?>/configuraciones/informacion.php" class="nav-link">
                    <i class="bi bi-gear"></i>
                      <p>Información</p>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="nav-item">
                <a href="<?php echo $URL;?>/login/cerrar_sesion.php" class="nav-link">
                    <i class="bi bi-x-circle" style="color: red;"></i>
                    <p>Cerrar sesión</p>
                    </a>
              </li>              

            </ul>

          </nav>
        </div>
      </aside>