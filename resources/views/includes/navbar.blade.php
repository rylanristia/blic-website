<nav
    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-auto container">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}">
            {{-- <img src="{{ url('./images/JARINGAN1.png') }}" alt="" width="30px"> --}}
            <span class="ms-3">Budi Luhur IT Club</span>
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ms-3">
                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link me-2" href="{{ route('division') }}"> Division
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link me-2" href=""> Showcase
                    </a>
                </li>
                @auth
                    <li class="nav-item ms-3">
                        <a class="nav-link me-2" href=""> Learn
                        </a>
                    </li>
                @endauth
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         What's new?
                    </a>
                    <ul class="dropdown-menu" style="overflow: hidden; margin-top: 13px !important;">
                        <li><a class="dropdown-item py-2" href="{{ route('project') }}">Project</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('news') }}">News</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link me-2" href="{{ route('about-us') }}"> About us
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link me-2" href=""> Structure
                    </a>
                </li>
                @auth
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong style="font-size: 14px">{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu" style="overflow: hidden; margin-top: 13px !important;">
                            @if (Auth::user()->type == 'student')
                                <li>
                                    <a class="dropdown-item py-2"  href="#">
                                        <i class="bi bi-mortarboard me-1"></i>
                                        E-learning
                                    </a>
                                </li>
                            @endif
                            @if (Auth::user()->level == 'admin')
                                <li>
                                    <a class="dropdown-item py-2" href="{{ route('news') }}">
                                        <i class="bi bi-speedometer2 me-1"></i>
                                        Admin page
                                    </a>
                                </li>
                            @endif
                            <li>
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <a href="{{ route('logout') }}">
                                        <button class="dropdown-item py-2"
                                            style="color: red; background-color:transparent; width: 100%;"><i
                                                class="bi bi-door-open-fill me-1" type="submit"></i>Logout</button>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="ms-3 nav-item">
                        <a class="nav-link me-2" href="/login">
                            <i class="fas fa-key opacity-6 text-dark me-1"></i> Sign In
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
