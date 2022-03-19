<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('admin.dashboard')}}"><span>LOGO</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('update.admin')}}">Update Profile<span class="sr-only"></span></a>     
      </li>
      <li> <a class="nav-link" href="{{route('logout')}}">Log Out<span class="sr-only"></span></a>   </li>
    </ul>
  </div>
</nav>

