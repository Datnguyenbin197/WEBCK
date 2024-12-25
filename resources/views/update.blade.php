@extends('layout.add')

@section('content')
<body>
    <h3 id="formTitle" class="mb-3">Sửa thông tin sách</h3>
    <form action="{{ route('updateBook', $book->IDB) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="IDB" class="form-label">Mã sách</label>
            <input type="text" class="form-control" id="IDB" name="IDB" value="{{ $book->IDB }}" readonly>
        </div>
      
        <div class="mb-3">
            <label for="NameB" class="form-label">Tên sách</label>
            <input type="text" class="form-control" id="NameB" name="NameB" value="{{ $book->NameB }}" required>
        </div>

        <div class="mb-3">
            <label for="NameTG" class="form-label">Tác giả</label>
            <input type="text" class="form-control" id="NameTG" name="NameTG" value="{{ $book->NameTG }}" required>
        </div>

        <div class="mb-3">
            <label for="Ke" class="form-label">Kệ</label>
            <input type="text" class="form-control" id="Ke" name="Ke" value="{{ $book->KE }}" required>
        </div>

        <div class="mb-3">
            <label for="Tang" class="form-label">Tầng</label>
            <input type="text" class="form-control" id="Tang" name="Tang" value="{{ $book->TANG }}" required>
        </div>

        <!-- Buttons -->
        <button type="submit" class="btn btn-primary">Hoàn thành</button>
        <a href="/" class="btn btn-secondary">Hủy</a>
    </form>
</body>
@endsection
