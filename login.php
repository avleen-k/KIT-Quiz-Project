<html>
<head>
<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
<div class="signup-box">
<h1>Anmelden</h1>
<form action="login.php" method="post">
Benutzer: <input type="text" name="username">
<br />
Passwort:<input type="password" name="pass">
<br />
<input type="submit" name="submitlogin" value="Login">
</form>
<div class="account">Sie haben kein Konto. Klicken Sie <a href="sign.php">hier.</a></div>

</div>
<?php
function check_pass($userN, $passW) {
$userN = $_POST["username"];
$passW = $_POST["pass"];
$userlist = file ("users.txt");
$success = false;
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] == $userN && $user_details[1] == $passW) {
        $success = true;
        break;
    }
}

if ($success) {
return 1;
}else {
return 0;
}

}

if($_POST["submitlogin"]){
if(check_pass($userN, $passW)) {
header("Location: quiz.php");
} else {
echo '<script>alert("Benutzername oder Passwort ist nicht korrekt")</script>';
}
}
?>

</body>
</html>