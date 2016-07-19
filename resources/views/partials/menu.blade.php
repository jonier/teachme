<ul class="nav navbar-nav">
    @foreach($items as $route => $value)
        <li role="presentation" {!! Html::classes(['active' => Route::is($route)]) !!}>
            <a href="{{ route($route) }}">{{ $value }}</a>
        </li>
    @endforeach
</ul>
