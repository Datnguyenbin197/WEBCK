@extends('layout.add')

@section('content')
<div class="mb-3">
    <label for="Tensv" class="form-label">Tên sinh viên</label>
    <input type="text" class="form-control" id="Tensv" name="Tensv" required>
</div>


<div class="mb-3">
    <label for="Masv" class="form-label">Mã sinh viên</label>
    <input type="text" class="form-control" id="Masv" name="Masv" required>
</div>

<div class="mb-3">
    <label for="STD" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" id="STD" name="STD" required>
</div>

<div class="mb-3">
    <label for="STD" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" id="STD" name="STD" required>
</div>

<div class="mb-3">
    <label for="IDB" class="form-label">Mã sách mượn</label>
    <input type="IDB" class="form-control" id="IDB" name="IDB" required>
</div>
<button type="submit" class="btn btn-primary" id="submitButton">Thêm mới</button>
        <button type="button" class="btn btn-secondary" id="cancelButton" style="display: none;">Hủy</button>
@endsection