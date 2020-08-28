<header class="header">

    <div class="header_block">
        @if($setting && $setting['logo'])
            <div class="header__logo">
                <a href="{{ url('/') }}" class="logo">
                    <img class="header__logo__img" src="{{ URL::asset('storage/' . $setting['logo']) }}" alt="{{ $setting['name_site'] }}" title="{{ $setting['name_site'] }}" />
                </a>
            </div>
        @endif
        <div class="header__search">
            <input class="header__search__input" type="text" placeholder="Pesquisar pelo produto" />
            <div class="header__search__icon">
                <svg heigth="20" width="20" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 136 136.219" width="136pt"><path d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0"/></svg>
            </div>
        </div>
        <div class="header__cart">
            <span>R$ 0,00</span>
            <span>
                <svg heigth="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 424.449 424.449"><circle cx="170.241" cy="374.273" r="50.176"/><path d="M316.673 324.098c-27.711 0-50.176 22.465-50.176 50.176s22.465 50.176 50.176 50.176c27.711 0 50.176-22.465 50.176-50.176s-22.465-50.176-50.176-50.176zM402.177 272.897H140.545l-5.12-29.696h215.04a15.36 15.36 0 0014.336-9.728l51.2-129.024c3.111-7.892-.766-16.812-8.658-19.922a15.349 15.349 0 00-5.678-1.07H108.801L96.513 12.801a15.36 15.36 0 00-15.36-12.8h-58.88c-8.483 0-15.36 6.877-15.36 15.36s6.877 15.36 15.36 15.36h46.08l44.032 260.096a15.36 15.36 0 0015.36 12.8h274.432c8.483 0 15.36-6.877 15.36-15.36s-6.877-15.36-15.36-15.36z"/></svg>
            </span>
        </div>
    </div>

    <div class="header_navigator">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <nav>
            <ul class="menu">
                <li class="active"><a href="{{ url('/') }}">Página inicial</a></li>
                <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                <li><a href="{{ url('/equipe') }}">Equipe</a></li>
                <li><a href="{{ url('/contato') }}">Contato</a></li>
            </ul>
        </nav>
    </div>

</header>
