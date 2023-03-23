<?php
$uHakbun = $_POST["hakbun"];
$uName = $_POST["name"];
$uTel = $_POST["tel"];
$uFiveme = $_POST["fiveme"];
$uText = $_POST["content"];
$uRegion = $_POST["region"];

$conn = mysqli_connect('localhost', 'appandme2023', '*******', 'appandme2023');

$query = "insert into submit(name, student_id, five, motive, phone, region) values('$uName', '$uHakbun', '$uFiveme', '$uText', '$uTel', '$uRegion');";
mysqli_query($conn, $query);
echo ("<script>alert('지원서 작성이 완료되었습니다!');</script>");
mysqli_close($conn);
echo("<script>location.replace('/apply.html');</script>");  
?>
<!-- <meta http-equiv = 'refresh' content='0;url=apply.html'>; -->