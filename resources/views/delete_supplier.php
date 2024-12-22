<?php

$IDB = $_POST['IDB'];

$sql = "DELETE FROM Book WHERE IDB = $IDB";
if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Xóa thành công']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Lỗi: ' . $conn->error]);
}
?>
