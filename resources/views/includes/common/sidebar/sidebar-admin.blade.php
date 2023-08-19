      <!-- Sidebar scroll-->
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="./index.html" class="text-nowrap logo-img">
                  <img src="/assets/images/logos/dark-logo.svg" width="180" alt="" />
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-8"></i>
              </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
              <ul id="sidebarnav">
              </ul>
              <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
                  <div class="d-flex">
                      <div class="unlimited-access-title me-3">
                          <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                          <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
                      </div>
                      <div class="unlimited-access-img">
                          <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                      </div>
                  </div>
              </div>
          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
      <script>
          const listAdminMenu = [{
                  heading: 'Home',
                  icon: 'ti ti-dots nav-small-cap-icon fs-4',
                  children: [{
                      title: 'Dashboard',
                      url: '/admin',
                      icon: 'ti ti-layout-dashboard'
                  }]
              },
              {
                  heading: 'ecommerce',
                  icon: 'ti ti-dots nav-small-cap-icon fs-4',
                  children: [{
                          title: 'tất cả',
                          url: "{{route('product')}}",
                          icon: 'ti ti-box'
                      },
                      {
                          title: 'thêm',
                          url: "{{route('create-product-page')}}",
                          icon: 'ti ti-plus'
                      },
                      {
                          title: 'điều hướng',
                          url: "{{route('category')}}",
                          icon: 'ti ti-sign-right'
                      },
                      {
                          title: 'đơn hàng  ',
                          url: "{{route('admin-bill')}}",
                          icon: 'ti ti-file-invoice'
                      }
                  ]
              },
              {
                  heading: 'user',
                  icon: 'ti ti-dots nav-small-cap-icon fs-4',
                  children: [{
                          title: 'tài khoản',
                          url: "{{route('admin-user')}}",
                          icon: 'ti ti-users',
                      },
                      {
                          title: 'thêm tài khoản',
                          url: "{{route('add-user')}}",
                          icon: 'ti ti-user-plus',
                      },
                      {
                          title: 'thùng rác',
                          url: "{{route('trash-user')}}",
                          icon: 'ti ti-trash',
                      }
                  ]
              },
              {
                  heading: 'post',
                  icon: 'ti ti-dots nav-small-cap-icon fs-4',
                  children: [{
                      title: 'tất cả',
                      url: "{{route('admin-post')}}",
                      icon: 'bi bi-file-post',
                  }]
              },
              {
                  heading: 'UI COMPONENTS',
                  icon: 'ti ti-dots nav-small-cap-icon fs-4',
                  children: [{
                          title: 'Buttons',
                          url: '/',
                          icon: 'ti ti-article'
                      },
                      {
                          title: 'Alerts',
                          icon: 'ti ti-alert-circle',
                          url: '/'
                      },
                      {
                          title: 'Card',
                          icon: "ti ti-cards",
                          url: '/'
                      },
                      {
                          title: 'Forms',
                          icon: "ti ti-file-description",
                          url: '/'
                      },
                      {
                          title: 'Typography',
                          icon: "ti ti-typography",
                          url: '/'
                      }

                  ]
              },
              {
                  heading: 'EXTRA',
                  icon: 'ti ti-dots nav-small-cap-icon fs-4',
                  children: [{
                          title: 'Icon',
                          url: '/',
                          icon: 'ti ti-mood-happy',
                      },
                      {
                          title: 'ti ti-aperture',
                          url: '/',
                          icon: 'ti ti-user-plus',
                      }
                  ]
              }
          ]
          const sidebar = document.querySelector('#sidebarnav');
          sidebar.innerHTML = listAdminMenu.map((item) => {
              const menuHeading = `<li class="nav-small-cap">
              <i class="${item.icon}"></i>
              <span class="hide-menu">${item.heading}</span>
            </li>`;
              const menuItem = item.children.map((item) => {
                  return ` <li class="sidebar-item">
        <a class="sidebar-link" href="${item.url}" aria-expanded="false">
         <span>
            <i class="${item.icon}"></i>
         </span>
        <span class="hide-menu">${item.title}</span>
         </a>
         </li>`
              }).join(' ');
              return menuHeading + menuItem;
          }).join(' ');
      </script>