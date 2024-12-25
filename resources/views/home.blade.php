<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Trang chủ</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Danh sách Sách</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Mã sách</th>
                    <th>Tên sách</th>
                    <th>Tác giả</th>
                    <th>Kệ</th>
                    <th>Tầng</th>
                    <th></th>
                    <th style="padding-left: 50px"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $book->IDB }}</td>
                        <td>{{ $book->NameB }}</td>
                        <td>{{ $book->NameTG }}</td>
                        <td>{{ $book->KE }}</td>
                        <td>{{ $book->TANG }}</td>
                        <td>
                            <!-- Form Xóa Sách -->
                            <form action="{{ route('deleteBook', $book->IDB) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')  <!-- Chỉ định là phương thức DELETE -->
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa sách này?')">Xóa</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('editBook', $book->IDB) }}" class="btn btn-warning btn-sm">Sửa</a>
                        </td>
                        
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
