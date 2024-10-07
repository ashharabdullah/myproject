<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light">AdminLTE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar bg-dark p-3">
    <!-- Sidebar user panel Dashboard -->
    <div class="user-panel mb-3">
      <a href="{{ route('dashboard') }}"
        class="d-flex align-items-center p-2 text-light {{ Request::is('dashboard') ? 'bg-primary text-white' : 'text-light' }}"
        style="border-radius: 5px;">
        <div class="image mr-2">
          <i class="fas fa-tachometer-alt"></i>
        </div>
        <div class="info">
          Dashboard
        </div>
      </a>
    </div>

      <!-- Sidebar user panel seller -->
      <div class="user-panel mb-3">
        <a href="{{ route('sellers.index') }}"
          class="d-flex align-items-center p-2 text-light {{ Request::is('sellers') ? 'bg-primary text-white' : 'text-light' }}"
          style="border-radius: 5px;">
          <div class="image mr-2">
            <i class="fas fa-store"></i>
          </div>
          <div class="info">
            Sellers
          </div>
        </a>
      </div>

        <!-- Sidebar user panel seller -->
        <div class="user-panel mb-3">
          <a href="{{ route('buyers.index') }}"
            class="d-flex align-items-center p-2 text-light {{ Request::is('buyers') ? 'bg-primary text-white' : 'text-light' }}"
            style="border-radius: 5px;">
            <div class="image mr-2">
              <i class="fas fa-shopping-basket"></i>
            </div>
            <div class="info">
              Buyers
            </div>
          </a>
        </div>

           <!-- Sidebar user panel product -->
           <div class="user-panel mb-3">
            <a href="{{ route('products.index') }}"
              class="d-flex align-items-center p-2 text-light {{ Request::is('products') ? 'bg-primary text-white' : 'text-light' }}"
              style="border-radius: 5px;">
              <div class="image mr-2">
                <i class="fas fa-box"></i>
              </div>
              <div class="info">
                Products
              </div>
            </a>
          </div>

  </div>
</aside>
