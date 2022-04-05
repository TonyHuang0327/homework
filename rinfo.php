<html>
<title>Register info</title>
<?php
$Uact=$_POST["Uact"];
$Upsw=$_POST["Upsw"];
$Umail=$_POST["Umail"];
$Utel=$_POST["Utel"];
echo "報名資料<br/>";
echo "帳號:".$Uact."<br/>";
echo "密碼:".$Upsw."<br/>";
echo "信箱:".$Umail."<br/>";
echo "電話為".$Utel,"<br/>";
?>
<form action="login.php"method="post">
<input type ="submit"value="去登入">
</form>
</html>