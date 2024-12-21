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
            <label for="TenNCC" class="form-label">Tên NCC:</label>
            <input type="text" class="form-control" id="TenNCC" name="TenNCC" required>
        </div>

        <!-- File Upload Section -->
        <div class="mb-3">
            <label class="form-label">Tải lên hình ảnh:</label>
            {{-- <form method="POST" action="upload.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <input type="file" name="image" class="form-control">
                <button type="submit" name="upload" class="btn btn-secondary mt-2">POST</button>
            </form>
            <?php require "xuly.php" ?> --}}
        </div>

      
        <div class="mb-3">
            <label for="Tacgia" class="form-label">Tác giả:</label>
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
