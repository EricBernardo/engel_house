<header class="header">

    <div class="header--content">

        @if($setting && $setting['logo'])
            <div class="logo">
                <a href="{{ url('/') }}" class="logo--content">
                    <img class="logo--img" src="{{ URL::asset('storage/' . $setting['logo']) }}" alt="{{ $setting['name_site'] }}" title="{{ $setting['name_site'] }}" />                    
                </a>
            </div>
        @endif

        <div class="search">
            <form action="{{ url('produtos') }}" method="get">
                <input class="search--input" type="text" name="q" placeholder="Buscar" value="{{ request()->get('q') }}" />
                <div class="search--icon">
                    <svg heigth="20" width="20" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 136 136.219" width="136pt"><path d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0"/></svg>
                </div>
            </form>
        </div>

    </div>

    <nav id="menu" class="menu">
        <input class="menu--button" type="checkbox" id="menu--button" />
        <label class="menu--icon" for="menu--button">
            <span class="navicon"></span>
        </label>
        <ul class="menu--list">
            <li class="menu--item {{ request()->is('/') ? 'menu--item-active' : null}}"><a href="{{ url('/') }}">Página inicial</a></li>

            @foreach ($categories as $category)
            <li class="menu--item {{ request()->is('produtos') && $category['slug'] === request()->get('category') ? 'menu--item-active' : null}}">
                <a href="{{ url('produtos?category=' . $category['slug']) }}">{{ $category['title'] }}</a>
            </li>
            @endforeach
            <li class="menu--item {{ request()->is('contato') ? 'menu--item-active' : null}}"><a href="{{ url('/contato') }}">Contato</a></li>
        </ul>
    </nav>

</header>
