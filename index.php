<?php
session_start();
$logOut = filter_input(INPUT_GET, 'lo');

if($logOut){
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time() - 42000, '/'
    );
    }
    session_destroy();

} else{
    
    $frmUser = filter_input(INPUT_POST, 'user');

    if($frmUser == "stitch" ){
        $_SESSION['user'] = "stitch";
        header("Location: membersonly.php");
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    include "login.php";
?>

</body>
</html>