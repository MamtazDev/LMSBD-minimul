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
            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('home') }}"><i
                    class="side-menu__icon fe fe-home"></i><span
                    class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="sub-category">
            <h3>UI Kit</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                    class="side-menu__icon fe fe-slack"></i><span
                    class="side-menu__label">Courses</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                <li><a href="{{ route('courses.index') }}" class="slide-item">Courses</a></li>
                <li><a href="{{ route('courses.create') }}" class="slide-item">Add Course</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                    class="side-menu__icon fe fe-slack"></i><span
                    class="side-menu__label">Students</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                <li><a href="{{ route('student.index') }}" class="slide-item">Students</a></li>
                <li><a href="{{ route('student.create') }}" class="slide-item">Add Student</a></li>
            </ul>
        </li>

    </ul>
    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
            width="24" height="24" viewBox="0 0 24 24">
            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
        </svg></div>
</div>