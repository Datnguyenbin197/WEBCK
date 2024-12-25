<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="card" >
     <div class="header-text">
        <img class="logo" src="{{ asset('img/logo.png') }}" />
        <h1 class="t">QUẢN LÝ THƯ VIỆN</h1>
        
     </div>
    </div> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/addBook">Thêm sách</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mượn trả sách
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/muonBook">Mượn sách</a></li>
                            <li><a class="dropdown-item" href="/timtraBook">Trả sách</a></li>
                            <li><a class="dropdown-item" href="/LS">Lịch sử mượn/trả sách</a></li>                       
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="{{ route('searchBook') }}" method="GET" style="height: 50px">
                    <input class="form-control me-2" type="search" name="query" placeholder="Nhập tên sách" aria-label="Search" required>
                    <button class="btn btn-outline-success" type="submit"><h6>Tìm kiếm</h6</button>
                </form>
                
            </div>
        </div>
    </nav>

    <!-- Thêm JavaScript Bootstrap trước thẻ đóng </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>
