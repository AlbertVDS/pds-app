<div class="dropdown pb-4">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
        data-bs-toggle="dropdown" aria-expanded="false">
        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="{{ route('user.favorite-recipes') }}">{{ translate('Recipes') }}</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="{{ route('user.settings') }}#fomap">{{ translate('Fodmap settings') }}</a></li>
        <li><a class="dropdown-item" href="{{ route('user.settings') }}#mailing">{{ translate('Mailing') }}</a></li>
        <li><a class="dropdown-item" href="{{ route('user.settings') }}#profile">{{ translate('Profile') }}</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="{{ route('logout') }}">{{ translate('Logout') }}</a></li>
    </ul>
</div>