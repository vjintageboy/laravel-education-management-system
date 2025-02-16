<style>
    /* Chỉnh vị trí logout container */
    .logout-container {
        position: absolute;
        top: 10px;
        right: 15px;
    }

    /* Nút logout */
    .logout-button {
        background-color: #dc3545;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        display: flex;
        align-items: center;
        font-family: 'Arial', sans-serif; /* Đồng bộ font chữ */
        transition: 0.3s;
    }

    .logout-button:hover {
        background-color: #c82333;
    }

    .logout-button i {
        margin-right: 5px;
    }

    /* Cải tiến bố cục navbar */
    .navbar-nav.ml-auto {
        display: flex;
        align-items: center;
    }
</style>


<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Sidebar toggle button -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/courses" class="nav-link">Khóa học</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/teachers" class="nav-link">Giảng viên</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/students" class="nav-link">Sinh viên</a>
        </li>
        @auth
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('profile.edit') }}" class="nav-link">Tài khoản</a>
        </li>
        @endauth
    </ul>

    <ul class="navbar-nav ml-auto">
        @auth
        <!-- Hiển thị thông tin người dùng và nút logout -->
        <div class="logout-container">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
        @endauth
    </ul>
</nav>
