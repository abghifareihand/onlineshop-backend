<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Online Shop</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">EC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home">
                    </i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('user') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}"><i class="fa fa-users">
                    </i> <span>Users</span>
                </a>
            </li>
            <li class="{{ Request::is('category') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('category.index') }}"><i class="fa fa-th-list">
                    </i> <span>Category</span>
                </a>
            </li>
            <li class="{{ Request::is('product') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('product.index') }}"><i class="fa fa-shopping-basket">
                    </i> <span>Product</span>
                </a>
            </li>
            <li class="{{ Request::is('order') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('order.index') }}"><i class="fa fa-shopping-basket">
                    </i> <span>Order</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
