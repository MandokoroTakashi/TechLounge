<header>
    <div class="logo">
        <a href="{{ route('home.index') }}">
            <h1>TechLounge</h1>
        </a>
    </div>

    <div class="pc-menu">
        <nav>
            <ul>
                @foreach ($nav_data as $nav)
                <li><a href="{{ route($nav->url) }}">{{ $nav->name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>

    <div class="sp-menu">
        <span class="material-icons" id="hum-open">menu</span>
    </div>
</header>
<div class="overlay">
    <span class="material-icons" id="hum-close">close</span>
    <nav>
        <ul>
            @foreach ($nav_data as $nav)
            <li><a href="{{ route($nav->url) }}">{{ $nav->name }}</a></li>
            @endforeach
        </ul>
    </nav>
</div>
