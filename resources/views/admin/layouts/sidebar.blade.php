<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->role_id== 1)
        <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard/frontendpage/list', 'dashboard/frontendpage/add', 'dashboard/frontendpage/edit') ? '' : 'collapsed' }}" href="{{ route('dashboard/frontendpage/list') }}">
                <i class="bi bi-gear"></i>
                <span>Page SEO</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard/users/list', 'dashboard/users/add', 'dashboard/users/edit') ? '' : 'collapsed' }}" href="{{ route('dashboard/users/list') }}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard/category/list', 'dashboard/category/add', 'dashboard/category/edit') ? '' : 'collapsed' }}" href="{{ route('dashboard/category/list') }}">
                <i class="bi bi-folder"></i>
                <span>Category</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard/blog/list', 'dashboard/blog/add', 'dashboard/blog/edit') ? '' : 'collapsed' }}" href="{{ route('dashboard/blog/list') }}">
                <i class="bi bi-card-list"></i>
                <span>Blog</span>
            </a>
        </li>
    </ul>
</aside>
