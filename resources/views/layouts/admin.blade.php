@extends('layouts.app')
@section('content')


    
   
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="/admin-dashboard">
                <span data-feather="home"></span><i class="fas fa-home"></i>
               home<span class="sr-only"></span>
              </a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link active" href="/coaches">
                <span data-feather="home"></span> <i class="fas fa-running"></i>
                Coaches <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/clients">
                <span data-feather="file"></span><i class="fas fa-users"></i>
                Clients
              </a>
            </li>
           
          </ul>
  
        
         
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 p-3">
        @yield('main')
    </main>
            
    </div>
  </div>
  
@endsection


           
