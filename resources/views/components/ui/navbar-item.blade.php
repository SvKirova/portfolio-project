@props(['route' => null])

<li>
    <a {{ $attributes->merge([
        'href' => $route ? route($route) : '#',
        'class' => $route && Request::routeIs($route) ? 'active' : ''
    ]) }}>
        {{ $slot }}
    </a>
</li>
