<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">Quản lý giáo dục</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('courses.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Khóa học</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('teachers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>Giảng viên</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('students.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Sinh viên</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('enrollments.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Đăng ký</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
