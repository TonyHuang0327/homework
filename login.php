<?php
session_start();
?>
<html>
<title>login</title>
<head><font size=7><b>登入</b></font></head><br>
<body>
<form action=""method="post">
    帳號:<input type="text" name="Lact"><br>
    密碼:<input type="text" name="Lpsw"><br>
    <input type="submit"value="登入">
</form>

<?php
$usract="tony";
$usrpsw="20020327";
date_default_timezone_set('Asia/Taipei');
//header("Refresh:1");
echo date("m-d-Y H:i:s",time());
    if(isset($_POST["Lact"])){
        if($_POST["Lact"]!=null){
            $Lact=$_POST["Lact"];
            $Lpsw=$_POST["Lpsw"];
            if($usract==$Lact && $usrpsw==$Lpsw){
                header('Location:kenting.php');
            }else{
                    echo "帳號或密碼錯誤";
        }
    }
}
?>
</body>
</html>