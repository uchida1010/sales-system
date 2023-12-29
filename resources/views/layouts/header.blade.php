<header class="header">
    <div class="header-container">
        <div class="logo-wrap">
        <div class="logo-text">
        <a href="{{ url('sales-system')}}">
        販売管理システム
        </a>
        </div>
        </div>
        
        <div class="navbar-wrap" >
            <ul class="navbar-box">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">取引先マスタ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">実績</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">在庫表</a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn-logout nav-link">
                Logout
                </button>
                </form>
            </ul>
        </div>
    </div>
</header>