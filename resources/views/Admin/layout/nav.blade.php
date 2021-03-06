<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('dashboard')}}">Ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('user')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('admins')}}">Admins</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('category')}}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('product')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('category')}}">Orders</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <!-- login & logout -->
      <ul id="nav-log" >
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('Admin/Profile/'.Auth::user()->profile)}}" width="30px" height="30px" class="rounded-circle" alt="User Profile">  
            
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="user-drapdown-menu">  
            
              <li class="nav-item ml-4">
                <a class="nav-link" href="{{url('admin_setting')}}" style="margin-left:20px;">
                      Profile <i class="fa fa-gear"></i>
                </a>
              </li>
              <li class="p-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                      this.closest('form').submit();" style="text-decoration:none;">
                      logout <i class="fa fa-sign-out"></i>
                    </x-dropdown-link>
                </form>
              </li>
            </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>