<meta charset="UTF-8">
<?php 
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysql_connect('localhost','root','123');
$sql="select * from user where username='".$username."' and password='".$password."'";
$qr=mysql_db_query('dxsjyw',$sql,$conn);

if($rs=mysql_fetch_object($qr))
{
		$_SESSION['username']=$username;
		$_SESSION['po']=$rs->po;
		echo "<script>alert('登录成功！');location.href='index.php'</script>";
}
else
{
	echo "<script>alert('你的用户名或者密码错！');history.go(-1)</script>";
}
?>