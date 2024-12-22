@extends('layout.add')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container mt-5">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Tên sinh viên</th>
                <th>Mã sinh viên</th>
                <th>Số điện thoại</th>
                <th>Tên sách</th>
                <th>Mã sách</th>
            </tr>
        </thead>
        <tbody id="supplierTable">
            <!-- Nội dung sẽ được điền bởi Ajax -->
        </tbody>
    </table>
    <script>
        // Load danh sách 
        function loadSuppliers() {
            $.get('view_suppliers.php', function (data) {
                const suppliers = JSON.parse(data);
                let rows = '';
                suppliers.forEach(supplier => {
                    rows += `
                        <tr>
                            <td>${supplier.Namesv}</td>
                            <td>${supplier.Masv}</td>
                            <td>${supplier.STD}</td>
                            <td>${supplier.NameB}</td>
                            <td>${supplier.IDB}</td>
                        </tr>
                    `;
                });
                $('#supplierTable').html(rows);
            }); 
        }
    </script>
</div>

@endsection