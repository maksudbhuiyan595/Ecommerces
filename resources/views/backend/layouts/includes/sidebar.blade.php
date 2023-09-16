<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('category.create')}}">
              <i class="bi bi-circle"></i><span>Category Create</span>
            </a>
          </li>
          <li>
            <a href="{{route('category.index')}}">
              <i class="bi bi-circle"></i><span>Category Lists</span>
            </a>
          </li>
         
        </ul>
      </li><!-- categories -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-subcategory" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Subcategoris</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-subcategory" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('subcategory.create')}}">
              <i class="bi bi-circle"></i><span>subcategory Create</span>
            </a>
          </li>
          <li>
            <a href="{{route('subcategory.index')}}">
              <i class="bi bi-circle"></i><span>Subcategory Lists</span>
            </a>
          </li>
         
         
        </ul>
      </li><!-- subcategories -->

    </ul>

  </aside>