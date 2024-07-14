<aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">BarterBox</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Bx</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('profile.user') }}">My Profile</a>
                    </li>
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('user.show.myItem', 'user_id') }}">My Items</a>
                    </li>
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('user.status.item') }}">Status Items</a>
                    </li>
                </ul>
            </li>
    </aside>