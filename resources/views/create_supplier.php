<?php

$IDB = $_POST['IDB'];
$NameB = $_POST['NameB'];
$NameTG = $_POST['NameTG'];
$KE = $_POST['KE'];
$TANG = $_POST['TANG'];
$Tensv = $_POST['Tensv'];
$Masv = $_POST['Masv'];
$SDT = $_POST['SDT'];



$sql = "INSERT INTO BOOK (IDB, NameB, NameTG, KE, TANG) VALUES ('$IDB', '$NameB', '$NameTG', '$KE' , '$TANG')";
if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Thêm thành công']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Lỗi: ' . $conn->error]);
}

$sql = "INSERT INTO SV (Tensv, Masv, SDT ) VALUES ('$Tensv', '$Masv','$SDT')";
if($conn->query($sql)===TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Thêm thành công']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Lỗi: ' . $conn->error]);
}

?>
