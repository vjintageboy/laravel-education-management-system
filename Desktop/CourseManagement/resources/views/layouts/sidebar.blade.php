<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">Quản lý đào tạo - EMS</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/courses" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Khóa học</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/teachers" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>Giảng viên</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/students" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Sinh viên</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Tài khoản</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
