@extends('layout.add')

@section('content')
<body>
    <h3 id="formTitle" class="mb-3">Tìm kiếm thông tin mượn sách</h3>
    
    <form action="{{ route('findBorrow') }}" method="POST">
        @csrf <!-- Bảo vệ CSRF -->
        <div class="mb-3">
            <label for="Masv" class="form-label">Mã sinh viên</label>
            <input type="text" class="form-control" id="Masv" name="Masv" required>
        </div>
        <button type="submit" class="btn btn-primary" id="submitButton">Tìm Kiếm</button>
    </form>
</body>
@endsection
