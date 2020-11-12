@include("mylayout.header")

<div class="jumbotron">
  <div class="container text-center">
    @yield('page-title')
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  
@yield('content')

@include("mylayout.footer")
