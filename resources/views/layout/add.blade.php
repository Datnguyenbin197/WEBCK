<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header') <!-- Header -->
</head>
<body>
    <div class="container">
        @yield('content') <!-- Nội dung động -->
    </div>
    @include('layout.footer') <!-- Footer -->
</body>
</html>
