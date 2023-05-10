 <!--HEADER-->
 <div class="header">
    @if(Auth::guard('admin')->user())
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a href="/" class="navbar navbar-brand">
                <img class="logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar"></a>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="list-head navbar-nav ">
                    <a class="nav-item" href="/">Home</a>
                    <a class="nav-item" href="/blog">Blog</a>
                    <a class="nav-item" href="/stores">Store</a>
                    <a class="nav-item" href="/aboutus">About Us</a>
                </div>
                <li class="nav-item dropdown">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                    {{Auth::guard('admin')->user()->name}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: 18rem;">
                    <li><a class="dropdown-item" href="{{ url('/logout') }}" style="width: 80%;">Logout</a></li>
                </ul>
            </li>
            </div>
        </div>
        </nav>
    </nav> 
    @else
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a href="/" class="navbar navbar-brand">
                <img class="logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar"></a>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="list-head navbar-nav ">
                    <a class="nav-item" href="/">Home</a>
                    <a class="nav-item" href="/blog">Blog</a>
                    <a class="nav-item" href="/stores">Store</a>
                    <a class="nav-item" href="/aboutus">About Us</a>
                </div>
                <div class="navbar-nav ms-auto sign">
                    <a href="{{ route('login') }}" class="nav-item">Sign In</a>
                </div>
            </div>
        </div>
        </nav>
    </nav> 
    @endif
</div>
<!--END HEADER-->