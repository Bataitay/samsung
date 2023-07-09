<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SamSung</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('phone')}}">Điện thoại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tv-av')}}">TV&AV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('fridge')}}">Tủ lạnh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('washing')}}">Máy giặt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('screen')}}">Màn hình</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('houseware')}}">Đồ gia dụng</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Danh mục
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('fridge')}}">Tủ lạnh</a></li>
                        <li><a class="dropdown-item" href="{{route('washing')}}">Máy giặt</a></li>
                        <li><a class="dropdown-item" href="{{route('air-purifier')}}">Máy lọc không khí</a></li>
                        <li><a class="dropdown-item" href="{{route('air-conditioning')}}">Điều hòa</a></li>
                        <li><a class="dropdown-item" href="{{route('vacuum-cleaner')}}">Máy hút bụi</a></li>
                        <li><a class="dropdown-item" href="{{route('screen')}}">Màn hình</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                @if(Auth::check() && auth()->user()->role_id == 1)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chức năng
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('user.create')}}">Thêm tài khoản</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
