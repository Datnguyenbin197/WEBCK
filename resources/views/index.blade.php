@include('layout.header')
@include('home')

<!-- Thêm khoảng trống vào footer bằng CSS inline -->
@include('layout.footer', ['style' => 'margin-top: 50px;'])
