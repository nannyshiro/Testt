<?php
if($_POST['Add'])
{
// เชื่่อมต่อฐานข้อมูล
$host="localhost"; // กำหนด host
$username="root"; // กำหนด username
$pass_word=""; // กำหนด Password
$db="people"; // กำหนดชื่อฐานข้อมูล
$Conn = mysql_connect( $host,$username,$pass_word) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
mysql_query("SET NAMES utf8",$Conn); // set กำหนดมาตราฐาน
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล 
//--->
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
// เพิ่มลงฐานข้อมูล
$sql_add = "insert into customer set 
name = '$name' , lastname = '$lastname' , address = '$address'";
mysql_query($sql_add) or die(mysql_error());
echo "เพิ่มข้อมูลของ $name $lastname สำเร็จแล้ว";
//-->
}
?>