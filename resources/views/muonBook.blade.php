@extends('layout.add')

@section('content')
  
<body>

<form action="{{ route('borrow.add') }}" method="POST">
    @csrf <!-- Thêm mã bảo vệ CSRF -->
    
    <h3 id="formTitle" class="mb-3">Mượn sách</h3>  

    <div class="mb-3">
        <label for="Tensv" class="form-label">Tên sinh viên</label>
        <input type="text" class="form-control" id="Tensv" name="Tensv" required>
    </div>

    <div class="mb-3">
        <label for="Masv" class="form-label">Mã sinh viên</label>
        <input type="text" class="form-control" id="Masv" name="Masv" required>
    </div>

    <div class="mb-3">
        <label for="class" class="form-label">Lớp sinh hoạt</label>
        <input type="text" class="form-control" id="class" name="class" required>
    </div>

    <div class="mb-3">
    <label for="SDT" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" id="SDT" name="SDT" maxlength="10" required>
    <small class="text-danger" id="errorSDT" style="display: none;">Số điện thoại không được vượt quá 10 chữ số.</small>
    @error('SDT')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>


    <div class="mb-3">
      <label for="IDB" class="form-label">Mã sách mượn</label>
        <select class="form-control" id="IDB" name="IDB" required>
         <option value="">-- Chọn Mã Sách --</option>
          @foreach($books as $book)
            <option value="{{ $book->IDB }}">{{ $book->IDB }} - {{ $book->NameB }}</option>
          @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label for="dateM" class="form-label">Ngày mượn</label>
        <input type="date" class="form-control" id="dateM" name="dateM" required>
    </div>

    <button type="submit" class="btn btn-primary" id="submitButton">Thêm mới</button>
</form>

<script>
    // Tự động cập nhật ngày hiện tại cho trường dateM
    document.addEventListener('DOMContentLoaded', function () {
        const dateField = document.getElementById('dateM');
        const today = new Date().toISOString().split('T')[0]; // Lấy ngày hiện tại theo định dạng YYYY-MM-DD
        dateField.value = today; // Gán giá trị ngày hiện tại vào trường dateM
    });
</script>



<script>
    document.getElementById('SDT').addEventListener('input', function () {
        const errorElement = document.getElementById('errorSDT');
        if (this.value.length > 10) {
            errorElement.style.display = 'block';
        } else {
            errorElement.style.display = 'none';
        }
    });
</script>

</body>
@endsection