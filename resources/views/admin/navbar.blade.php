<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Hussein<span>HB</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main Topic</li>

          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/users')}}" class="nav-link">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Users</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{url('/foodmenu')}}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Foods</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/viewchef')}}" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Chefs</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/viewreservation')}}" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Reservation</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/orders')}}" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="star"></i>
              <span class="link-title">Orders</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>