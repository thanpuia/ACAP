@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-yellow-700 ti-dashboard"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, 'student.create') ? 'active' : '' }}" href="{{ route('student.create') }}">
        <span class="icon-holder">
            <i class="c-yellow-700 ti-face-sad"></i>
        </span>
        <span class="title">New Admission</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="">
        <span class="icon-holder">
        <i class="c-yellow-700 ti-user"></i>
        </span>
        <span class="title">Student List</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="">
        <span class="icon-holder">
        <i class="c-yellow-700 ti-book"></i>
        </span>
        <span class="title">Add Subject</span>
    </a>
</li>