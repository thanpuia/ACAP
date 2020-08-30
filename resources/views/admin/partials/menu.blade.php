@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, 'student.dashboard') ? 'active' : '' }}" href="{{ route('student.dashboard') }}">
        <span class="icon-holder">
            <img src="/images/dashboard.svg" alt="Dashboard" width="24" height="24">
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, 'student.create') ? 'active' : '' }}" href="{{ route('student.create') }}">
        <span class="icon-holder">
        <img src="/images/admission.svg" alt="Admission" width="24" height="24">
        </span>
        <span class="title">New Admission</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route,'student.listAll') ? 'active' : '' }}" href="{{ route('student.listAll') }}">
        <span class="icon-holder">
        <img src="/images/student.svg" alt="Students" width="24" height="24">        </span>
        <span class="title">Student List</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, 'course.index') ? 'active' : '' }}" href="{{route('course.index')}}">
        <span class="icon-holder">
        <img src="/images/subject.svg" alt="Add Subject" width="24" height="24">        </span>
        <span class="title">Add Subject</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, 'student.fastSearch') ? 'active' : '' }}" href="{{route('student.fastSearch')}}">
        <span class="icon-holder">
            
        <img src="/images/fastsearch.svg" alt="Add Subject" width="24" height="24">    
        </span>
        <span class="title">Fast Search</span>
    </a>
</li>