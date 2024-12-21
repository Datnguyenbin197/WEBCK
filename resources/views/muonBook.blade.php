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
    <label for="Gia" class="form-label">Giá</label>
    <input type="text" class="form-control" id="Gia" name="Gia" required>
</div>

<div class="mb-3">
    <label for="Tang" class="form-label">Tầng</label>
    <input type="text" class="form-control" id="Tang" name="Tang" required>
</div>
@endsection