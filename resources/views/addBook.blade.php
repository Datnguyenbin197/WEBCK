@extends('layout.add')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body>
    <h3 id="formTitle" class="mb-3">Thêm sách</h3>
    
    <!-- Main Form -->
    <form id="createForm" class="mb-4">
        <input type="hidden" id="Ten" name="Ten"> <!-- Hidden field for ID when editing -->

        <!-- Tên NCC -->
        <div class="mb-3">
            <label for="IDB" class="form-label">Mã sách</label>
            <input type="text" class="form-control" id="IDB" name="IDB" required>
        </div>
      
        <div class="mb-3">
            <label for="NameB" class="form-label">Tên sách</label></label>
            <input type="text" class="form-control" id="NameB" name="NameB" required>
        </div>

        <div class="mb-3">
            <label for="Tacgia" class="form-label">Tác giả</label>
            <input type="text" class="form-control" id="Tacgia" name="Tacgia" required>
        </div>


        <div class="mb-3">
            <label for="Ke" class="form-label">Kệ</label>
            <input type="text" class="form-control" id="Ke" name="Ke" required>
        </div>

        <div class="mb-3">
            <label for="Gia" class="form-label">Giá</label>
            <input type="text" class="form-control" id="Gia" name="Gia" required>
        </div>

        <div class="mb-3">
            <label for="Tang" class="form-label">Tầng</label>
            <input type="text" class="form-control" id="Tang" name="Tang" required>
        </div>

        <!-- Buttons -->
        <button type="submit" class="btn btn-primary" id="submitButton">Thêm mới</button>
        <button type="button" class="btn btn-secondary" id="cancelButton" style="display: none;">Hủy</button>
    </form>
</body>
@endsection
