<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle pt-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img class="img-fluid m-0" src="{{ asset('frontend') }}/assets/ic/logged-in-profile.png" alt="" width="30px">
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item text-black" href="#">Profile</a></li>
    <li><a class="dropdown-item text-black" href="{{ route('dashboard.user.index') }}">Dashboard</a></li>
    <li><hr class="dropdown-divider"></li>
    <li>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="dropdown-item text-black">Logout</button>
      </form>
    </li>
  </ul>
</li>
