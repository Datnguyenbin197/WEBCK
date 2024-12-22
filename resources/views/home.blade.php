<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Trang chủ</title>
</head>
<body>
    <div class="container mt-5">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Tên sách</th>
                <th>Ảnh minh hoạ</th>
                <th>Tác giả</th>
                <th>Kệ</th>
                <th>Giá</th>
                <th>Tầng</th>
            </tr>
        </thead>
        <tbody id="supplierTable">
            <!-- Nội dung sẽ được điền bởi Ajax -->
        </tbody>
    </table>


<!-- Script -->
<script>
    // Load danh sách 
    function loadSuppliers() {
        $.get('view_suppliers.php', function (data) {
            const suppliers = JSON.parse(data);
            let rows = '';
            suppliers.forEach(supplier => {
                rows += `
                    <tr>
                        <td>${supplier.MaNCC}</td>
                        <td>${supplier.}</td>
                        <td>${supplier.}</td>
                        <td>${supplier.}</td>
                        <td>${supplier.}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editSupplier(${supplier.MaNCC})">Sửa</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteSupplier(${supplier.MaNCC})">Xóa</button>
                        </td>
                    </tr>
                `;
            });
            $('#supplierTable').html(rows);
        });
    }

    // Thêm mới hoặc sửa 
    $('#createForm').submit(function (event) {
        event.preventDefault();
        const formData = $(this).serialize();
        const url = $('#MaNCC').val() ? 'update_supplier.php' : 'create_supplier.php';
        $.post(url, formData, function (response) {
            alert(response.message);
            if (response.status === 'success') {
                loadSuppliers();
                resetForm(); // Reset form sau khi thêm hoặc sửa thành công
            }
        }, 'json');
    });

    // Xóa 
    function deleteSupplier(id) {
        if (confirm('Bạn có chắc muốn xóa nhà cung cấp này?')) {
            $.post('delete_supplier.php', { id: id }, function (response) {
                alert(response.message);
                if (response.status === 'success') {
                    loadSuppliers();
                }
            }, 'json');
        }
    }

    // Sửa 
    function editSupplier(id) {
        $.get('get_supplier.php', { id: id }, function (data) {
            const supplier = JSON.parse(data);
            $('#MaNCC').val(supplier.MaNCC); // Điền dữ liệu vào form
            $('#TenNCC').val(supplier.TenNCC);
            $('#DiaChi').val(supplier.DiaChi);
            $('#SDT').val(supplier.SDT);
            $('#formTitle').text('Sửa nhà cung cấp');
            $('#submitButton').text('Cập nhật');
            $('#cancelButton').show();
        });
    }

    // Hủy quá trình sửa
    $('#cancelButton').click(function () {
        resetForm();
    });

    // Reset form về trạng thái mặc định
    function resetForm() {
        $('#MaNCC').val('');
        $('#TenNCC').val('');
        $('#DiaChi').val('');
        $('#SDT').val('');
        $('#formTitle').text('Thêm nhà cung cấp');
        $('#submitButton').text('Thêm mới');
        $('#cancelButton').hide();
    }

    // Tải danh sách nhà cung cấp khi trang được load
    $(document).ready(function () {
        loadSuppliers();
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>