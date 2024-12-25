@extends('layout.add')

@section('content')
<body>
    <h3>Trả sách</h3>

    <form action="{{ route('borrow.update') }}" method="POST">
        @csrf <!-- Token bảo mật -->

        <!-- Mã sinh viên -->
        <div class="mb-3">
            <label for="Masv">Mã sinh viên</label>
            <input type="text" id="Masv" name="Masv" value="{{ $Masv }}" readonly class="form-control">
        </div>

        <!-- Mã sách mượn -->
        <div class="mb-3">
            <label for="IDB">Mã sách mượn</label>
            <select id="IDB" name="IDB" class="form-control" required>
                <option value="">-- Chọn Mã Sách --</option>
                @foreach($borrows as $borrow)
                    <option value="{{ $borrow->IDB }}">
                        {{ $borrow->IDB }} - {{ $borrow->book->NameB ?? 'Không rõ tên sách' }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Ngày trả -->
        <div class="mb-3">
            <label for="dateT">Ngày trả</label>
            <input type="date" id="dateT" name="dateT" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Trả sách</button>
    </form>
</body>
@endsection
