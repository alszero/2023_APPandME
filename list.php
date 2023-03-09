<?php
$conn = mysqli_connect('localhost', 'appandme2023', 'alflarhkgkrrh1!', 'appandme2023');

$query = "select * from submit";
$a = mysqli_query($conn, $query);
$b = mysqli_num_rows($a);
for($i=0; $i<$b; $i++){
    $c = mysqli_fetch_row($a);
    echo "<tr><td> 학번 : $c[1]</td></tr></br><tr><td> 이름 : $c[0]</td></tr></br><td> 전화번호 : $c[4]</td></tr></br><td> 5글자 : $c[2]</td></tr></br><td> 지원동기 : $c[3]</td></tr></tr></br><td> 지역 : $c[6]</td></br></tr><hr>";
}
mysqli_close($conn);
?>