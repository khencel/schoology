<ul class="nav-links">
    <li>
      <a href="{{  url('/home') }}" class="{{request()->is('home')?'active':''}}">
        <i class='bx bx-grid-alt' ></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{ url('jurisprudence/index') }}" class="{{request()->is('jurisprudence/*')?'active':''}}">
        <i class='bx bx-box' ></i>
        <span class="links_name">Jurisprudence</span>
      </a>
    </li>
    <li>
      <a href="{{ url('course/index') }}" class="{{request()->is('course/*')?'active':''}}">
        <i class='bx bx-box' ></i>
        <span class="links_name">Course</span>
      </a>
    </li>
    <li class="log_out">
      <a href="#">
        <i class='bx bx-log-out'></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
  