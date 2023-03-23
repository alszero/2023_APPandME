<?php
$conn = mysqli_connect('localhost', 'appandme2023', '*******', 'appandme2023');

$query = "select * from submit";
$q = mysqli_query($conn, $query);
$rows = mysqli_num_rows($q);
for($i=0; $i<$rows; $i++){
    $row = mysqli_fetch_row($q);
    echo "<tr><td> 학번 : $row[1]</td></tr></br>
        <tr><td> 이름 : $row[0]</td></tr></br>
        <tr><td> 전화번호 : $row[4]</td></tr></br>
        <tr><td> 5글자 : $row[2]</td></tr></br>
        <tr><td> 지원동기 : $row[3]</td></tr></br>
        <tr><td> 구분: $row[5]</td></tr><br/><hr>";
}
mysqli_close($conn);
?>