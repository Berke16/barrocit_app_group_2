<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="@guest {{url('/')}} @else {{url('/home')}} @endguest">
                {{ config('app.name', 'Barroc-IT.') }}  @yield('location')
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::user()->type == 'sales')
                        <li>
                            <a href="{{action('CustomersController@create')}}">Make Customer</a>
                        </li>
                        @elseif(Auth::user()->type == 'admin')
                        <li>
                            <a href="{{action('UsersController@index')}}">Users</a>
                        </li>
                        <li>
                            <a href="{{action('CustomersController@create')}}">Make Customer</a>
                        </li>
                        <li>
                            <a href="{{action('TrashController@index')}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
@if (Session::has('message'))
<div class="alert alert-success text-center">{{ Session::get('message') }}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger text-center">
    <ul class="">
        @foreach ($errors->all() as $error)
        <li class="list-unstyled">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif