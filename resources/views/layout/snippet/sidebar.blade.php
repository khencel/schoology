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
        <span class="links_name">
          <small>
            Course
          </small>
        </span>
      </a>
    </li>
    <li>
      <a href="{{ url('/penal-code/books') }}" class="{{request()->is('penal-code/*')?'active':''}}">
        <i class='bx bx-box' ></i>
        <span class="links_name">
          <small>
            The Revised Penal Code
          </small>
        </span>
      </a>
    </li>
    <li class="log_out">
      <a class="nav-link text-dark" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
          {{-- {{ __('Logout') }} --}}
          <i class='bx bx-log-out'></i>
        <span class="links_name">Log out</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>  
    </li>
  </ul>
  