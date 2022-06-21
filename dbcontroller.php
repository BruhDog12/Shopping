<?php
echo"<h2>เเสดงข้อมูลจาดตาราง</h2>"
$con = mysqli_connect("localhost","root","","shopping_cart") or die("Fail");
echo "เชื่อมต่อสำเร็จ"
$sql = "select * from product;";
$result = mysqli_query($con, $sql);
echo "<table border=3>";
echo "<tr>ของที่ขาย</td>"
echo "<td>"
echo 
?>