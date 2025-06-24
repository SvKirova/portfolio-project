<li><a class="{{ Request::routeIs($route) ? "active" : "" }}" href="{{ route($route) }}"> {{ $slot }}</a></li>
