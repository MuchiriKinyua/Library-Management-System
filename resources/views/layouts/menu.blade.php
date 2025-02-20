<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('authors.index') }}" class="nav-link {{ Request::is('authors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Authors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('books.index') }}" class="nav-link {{ Request::is('books*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Books</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('borrowings.index') }}" class="nav-link {{ Request::is('borrowings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Borrowings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('copies.index') }}" class="nav-link {{ Request::is('copies*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Copies</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('externals.index') }}" class="nav-link {{ Request::is('externals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Externals</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('fines.index') }}" class="nav-link {{ Request::is('fines*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Fines</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('logs.index') }}" class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Logs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('members.index') }}" class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Members</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('methods.index') }}" class="nav-link {{ Request::is('methods*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Methods</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Notifications</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('publishers.index') }}" class="nav-link {{ Request::is('publishers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Publishers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reservations.index') }}" class="nav-link {{ Request::is('reservations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Reservations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('resources.index') }}" class="nav-link {{ Request::is('resources*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Resources</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('types.index') }}" class="nav-link {{ Request::is('types*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('waitings.index') }}" class="nav-link {{ Request::is('waitings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Waitings</p>
    </a>
</li>
