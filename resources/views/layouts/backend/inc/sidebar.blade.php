<div class="main-sidemenu">
    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
        </svg></div>
    <ul class="side-menu">
        <li class="sub-category">
            <h3>Main</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link {{ request()->routeIs('home') ? 'active' : '' }}" data-bs-toggle="slide" href="{{ route('home') }}"><i
                    class="side-menu__icon fe fe-home"></i><span
                    class="side-menu__label">Dashboard</span></a>
        </li>

        <li class="slide {{ request()->routeIs('courses*') ? 'is-expanded' : '' }}">
            <a class="side-menu__item {{ request()->routeIs('courses*') ? 'is-expanded active' : '' }}" data-bs-toggle="slide" href="javascript:void(0)"><i
                    class="side-menu__icon fe fe-layers"></i><span
                    class="side-menu__label">Courses</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('courses.index') }}" class="slide-item {{ request()->routeIs('courses.index') ? 'active' : '' }}">Courses</a></li>
                <li><a href="{{ route('courses.create') }}" class="slide-item {{ request()->routeIs('courses.create') ? 'active' : '' }}">Add Course</a></li>
            </ul>
        </li>
        <li class="slide {{ request()->routeIs('batch*') ? 'is-expanded' : '' }}">
            <a class="side-menu__item {{ request()->routeIs('batch*') ? 'is-expanded active' : '' }}" data-bs-toggle="slide" href="javascript:void(0)"><i
                    class="side-menu__icon fe fe-wind"></i><span
                    class="side-menu__label">Batches</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('batch.index') }}" class="slide-item {{ request()->routeIs('batch.index') ? 'active' : '' }}">Batches</a></li>
                <li><a href="{{ route('batch.create') }}" class="slide-item {{ request()->routeIs('batch.create') ? 'active' : '' }}">Add Batch</a></li>
            </ul>
        </li>
        <li class="slide {{ request()->routeIs('class-content*') ? 'is-expanded' : '' }}">
            <a class="side-menu__item {{ request()->routeIs('class-content*') ? 'is-expanded active' : '' }}" data-bs-toggle="slide" href="javascript:void(0)"><i
                    class="side-menu__icon fe fe-slack"></i><span
                    class="side-menu__label">Classes</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('class-content.index') }}" class="slide-item {{ request()->routeIs('class-content.index') ? 'active' : '' }}">Classes</a></li>
                <li><a href="{{ route('class-content.create') }}" class="slide-item {{ request()->routeIs('class-content.create') ? 'active' : '' }}">Add Class</a></li>
            </ul>
        </li>
        <li class="slide {{ request()->routeIs('student*') ? 'is-expanded' : '' }}">
            <a class="side-menu__item {{ request()->routeIs('student*') ? 'is-expanded active' : '' }}" data-bs-toggle="slide" href="javascript:void(0)"><i
                    class="side-menu__icon fe fe-users"></i><span
                    class="side-menu__label">Students</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('student.index') }}" class="slide-item {{ request()->routeIs('student.index') ? 'active' : '' }}">Students</a></li>
                <li><a href="{{ route('student.create') }}" class="slide-item {{ request()->routeIs('student.create') ? 'active' : '' }}">Add Student</a></li>
            </ul>
        </li>
    </ul>
    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
            width="24" height="24" viewBox="0 0 24 24">
            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
        </svg></div>
</div>
