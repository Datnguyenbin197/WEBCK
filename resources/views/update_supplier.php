<?php
// Nhận dữ liệu từ form
$IDB = $_POST['IDB'];
$NameB = $_POST['NameB'];
$NameTG = $_POST['NameTG'];
$KE = $_POST['KE'];
$TANG = $_POST['TANG'];




$sql = "UPDATE BOOK SET IDB='$IDB', NameB='$NameB', NameTG='$NameTG', KE='$KE', TANG='$TANG' WHERE IDB=$IDB";
if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Sửa thành công!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Lỗi: ' . $conn->error]);
}

$conn->close();



