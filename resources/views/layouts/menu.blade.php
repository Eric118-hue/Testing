<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('import') }}" class="nav-link {{ Request::is('import') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>Reception IMPORT</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('export') }}" class="nav-link {{ Request::is('export') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>Reception EXPORT</p>
    </a>
</li>
