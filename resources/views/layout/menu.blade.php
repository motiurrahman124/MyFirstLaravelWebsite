<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}"><img class="ml-3 logo"src="{{asset('images/logo.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/service')}}">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/portfolio')}}">PORTFOLIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/about')}}">ABOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>