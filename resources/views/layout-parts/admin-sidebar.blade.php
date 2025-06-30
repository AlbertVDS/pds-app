<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-5 d-none d-sm-inline">{{ translate('Admin Menu') }}</span>
    </a>
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
            <a href="/" class="nav-link align-middle px-0">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-house"></i> {{ translate('Home') }}</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('foods.index') }}" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-carrot"></i> {{ translate('Food list') }}</span></a>
        </li>
        
        <li>
            <a href="{{ route('mailings.index') }}" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-envelope"></i>
                    {{ translate('Mailing') }}</span></a>
        </li>

        <li>
            <a href="{{ route('recipes.index') }}" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-utensils"></i> {{ translate('Recipes') }}</span></a>
        </li>

        <li>
            <a href="{{ route('recipe-ingredients.index') }}" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-list"></i> {{ translate('Recipe ingredients') }}</span></a>
        </li>

        <li>
            <a href="{{ route('translations.index') }}" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-list"></i> {{ translate('Translations') }}</span></a>
        </li>
        
        <li>
            <a href="{{ route('profiles.user.index') }}" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-list"></i> {{ translate('Users') }}</span></a>
        </li>
        
    </ul>
    <hr>
    @auth
        @include('layout-parts.logged-in')
    @else
        @include('layout-parts.login-register')
    @endauth
    
</div>