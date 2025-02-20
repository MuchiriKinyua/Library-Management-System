<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }} text-yellow">
        <i class="nav-icon fas fa-home text-yellow"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item has-treeview {{ Request::is('books*') || Request::is('copies*') || Request::is('categories*') || Request::is('authors*') || Request::is('publishers*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-book text-yellow"></i>
        <p>
            Book Management
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('books.index') }}" class="nav-link {{ Request::is('books*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-book text-green"></i>
                <p>Books</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('copies.index') }}" class="nav-link {{ Request::is('copies*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-clone text-green"></i>
                <p>Book Copies</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tags text-green"></i>
                <p>Categories</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('authors.index') }}" class="nav-link {{ Request::is('authors*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-edit text-green"></i>
                <p>Authors</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('publishers.index') }}" class="nav-link {{ Request::is('publishers*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-building text-green"></i>
                <p>Publishers</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('members*') || Request::is('types*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-users text-yellow"></i>
        <p>
            Member Management
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('members.index') }}" class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user text-green"></i>
                <p>Members</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('types.index') }}" class="nav-link {{ Request::is('types*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card text-green"></i>
                <p>Membership Type</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('waitings*') || Request::is('borrowings*') || Request::is('reservations*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow {{ Request::is('waitings*') || Request::is('borrowings*') || Request::is('reservations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list"></i>
        <p>
            Reservations
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('waitings.index') }}" class="nav-link {{ Request::is('waitings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-hourglass-half text-green"></i>
                <p>Waiting List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('borrowings.index') }}" class="nav-link {{ Request::is('borrowings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-book-reader text-green"></i>
                <p>Borrowings</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('reservations.index') }}" class="nav-link {{ Request::is('reservations*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-check text-green"></i>
                <p>Reservations</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('fines*') || Request::is('payments*') || Request::is('methods*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-money-bill-wave text-yellow"></i>
        <p>
            Finance Management
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('fines.index') }}" class="nav-link {{ Request::is('fines*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-exclamation-circle text-green"></i>
                <p>Fines</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-credit-card text-green"></i>
                <p>Payments</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('methods.index') }}" class="nav-link {{ Request::is('methods*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-hand-holding-usd text-green"></i>
                <p>Payment Methods</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('resources*') || Request::is('externals*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-laptop text-yellow"></i>
        <p>
            Resource Management
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('resources.index') }}" class="nav-link {{ Request::is('resources*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cloud-download-alt text-green"></i>
                <p>Digital Resources</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('externals.index') }}" class="nav-link {{ Request::is('externals*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-external-link-alt text-green"></i>
                <p>External Resources</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('schedules*') || Request::is('staff*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-calendar"></i>
        <p>
            Staff Management
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('schedules.index') }}" class="nav-link {{ Request::is('schedules*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-clock text-green"></i>
                <p>Schedules</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('staff.index') }}" class="nav-link {{ Request::is('staff*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users text-green"></i>
                <p>Staff</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('notifications*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-bell text-yellow"></i>
        <p>
            Notifications
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-envelope text-green"></i>
                <p>Notifications</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('records*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-folder"></i>
        <p>
            Records
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('records.index') }}" class="nav-link {{ Request::is('records*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-alt text-green"></i>
                <p>Library Records</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('settings*') || Request::is('logs*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-cog"></i>
        <p>
            Settings
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('settings.index') }}" class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-wrench text-green"></i>
                <p>System Settings</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logs.index') }}" class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-alt text-green"></i>
                <p>Audit Logs</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('reports*') || Request::is('predictions*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link text-yellow">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>
            Reports & Analytics
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('reports.index') }}" class="nav-link {{ Request::is('reports*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-alt text-green"></i>
                <p>Reports</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('predictions.index') }}" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-pie text-green"></i>
                <p>Predictions</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog"></i>
        <p>
            Users and Controls
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>Roles</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-key"></i>
                <p>Permissions</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</li>