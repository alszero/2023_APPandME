<?php
$uHakbun = $_POST["hakbun"];
$uName = $_POST["name"];
$uTel = $_POST["tel"];
$uFiveme = $_POST["fiveme"];
$uText = $_POST["text"];

$conn = mysqli_connect('localhost', 'appandme2023', 'alflarhkgkrrh1!', 'appandme2023');

$query = "insert into submit(name, student_id, five, motive, phone) values('$uName', '$uHakbun', '$uFiveme', '$uText', '$uTel');";
mysqli_query($conn, $query);

mysqli_close($conn);
?>
<meta http-equiv = "refresh" content="0;url-apply.html">;
