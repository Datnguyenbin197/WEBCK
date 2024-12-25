@extends('layout.add')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 id="formTitle" class="mb-3">Lịch sử mượn/trả</h3>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Tên sinh viên</th>
                <th>Mã sinh viên</th>
                <th>Số điện thoại</th>
                <th>Lớp sinh hoạt</th>
                <th>Mã sách</th>
                <th>Ngày mượn</th>
                <td>Tình trạng trả sách</td>      
                <td>Ngày trả</td>    
            </tr>
        </thead>
        <tbody>
          @forelse($borrows as $borrow) 
          <tr>
              <td>{{ $borrow->student->Tensv }}</td>
              <td>{{ $borrow->Masv }}</td>
              <td>{{ $borrow->student->SDT }}</td>
              <td>{{ $borrow->student->class }}</td>
              <td>{{ $borrow->IDB }}</td>
              <td>{{ $borrow->dateM }}</td>
              <td>
                  @if ($borrow->traB == 0) Đã trả
                  @else Chưa trả  
                  @endif
              </td>
              <td>
                  @if ($borrow->traB == 0)  {{ $borrow->dateT }}
                  @else 
                  @endif
              </td>
           </tr>  
          @empty
              <tr><td colspan="8" class="text-center">Không có dữ liệu</td></tr>
          @endforelse
        </tbody>
    </table>
</div>
@endsection
