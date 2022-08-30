<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('export') }}" class="nav-link {{ Request::is('export') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>Reception import</p>
    </a>
</li>
