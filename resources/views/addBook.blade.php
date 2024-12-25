@extends('layout.add')

@section('content')

<body>
    <h3 id="formTitle" class="mb-3">Thêm sách</h3>
    
    <!-- Form gửi dữ liệu bằng POST đến route /addBook -->
    <form action="{{ route('addBook') }}" method="POST">
        @csrf <!-- Bảo vệ chống CSRF -->
        
        <div class="mb-3">
            <label for="IDB" class="form-label">Mã sách</label>
            <input type="text" class="form-control" id="IDB" name="IDB" required>
        </div>
      
        <div class="mb-3">
            <label for="NameB" class="form-label">Tên sách</label>
            <input type="text" class="form-control" id="NameB" name="NameB" required>
        </div>

        <div class="mb-3">
            <label for="NameTG" class="form-label">Tác giả</label>
            <input type="text" class="form-control" id="NameTG" name="NameTG" required>
        </div>
        <div class="mb-3">
            <label for="Ke" class="form-label">Kệ</label>
            <select class="form-select" id="Ke" name="Ke" required>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="Tang" class="form-label">Tầng</label>
            <select class="form-select" id="Tang" name="Tang" required>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
        
        <!-- Buttons -->
        <button type="submit" class="btn btn-primary" id="submitButton">Thêm mới</button>
        <button type="button" class="btn btn-secondary" id="cancelButton" style="display: none;">Hủy</button>
    </form>

</body>
@endsection
