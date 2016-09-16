<?php
session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
    header("Location: index.php#login");
    exit;
}

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
if ($username == "test" && $email == "test" && $password == "test"){
    $_SESSION['stausername'] = $username;
    echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
    echo "<script>
             alert('Successfully login!');
             window.location.href = 'index.php';
          </script>";
    exit;
}else{
    echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
    echo "<script>
             alert('Username or password incorrect!'); 
             window.history.go(-1);
          </script>";
    exit;
}


//include 'connect_to_mysql.php'; //connect the connection page
//
//$username = $_POST[username];
////check format
//if ($username == "" || strlen($username) > 20) {
//    echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
//    echo "<script>
//             alert('Please input proper username!');
//             window.history.go(-1);
//     </script>";
//    exit;
//}
//$password = $_POST[password];
////check format
//if ($password == "") {
//    echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
//    echo "<script>
//             alert('Please input your password!');
//             window.history.go(-1);
//     </script>";
//    exit;
//}
//if (strlen($password)>20) {
//    echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
//    echo "<script>
//             alert('Please input proper password!');
//             window.history.go(-1);
//     </script>";
//    exit;
//}
//
//$cfconfirmationnum = $_POST[cfconfirmationnum];
////check confirmationnum
//if ($cfconfirmationnum != $_SESSION["cfconfirmationnum"]) {
//    echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
//    echo "<script>
//             alert('验证码不正确!');
//             window.history.go(-1);
//     </script>";
//    exit;
//}
//
//$stmt = mysqli_prepare($mysqli, "SELECT `password`, `lastname`, `firstname` FROM `register` WHERE `username`= ?");
//
////check if the username entered is in the database.
//if ($stmt) {
//    mysqli_stmt_bind_param($stmt, "s", $username);
//    //mysqli_stmt_execute($stmt);
//    if (!$stmt->execute()) {
//        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
//    }else {
//        $stmt->bind_result($passwordTrue, $lastname, $firstname);
//        mysqli_stmt_fetch($stmt);
//        if (is_null($passwordTrue)){
//            //$_SESSION['error'] = "用户名不存在!";
//            //header("Location: index.php#login");
//            //echo "The ID or email address you entered is invalid.";
//            echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
//            echo "<script>
//             alert('用户名不正确!');
//             window.history.go(-1);
//     </script>";
//            exit;
//        }else{
//            if($passwordTrue == $password){
//                $_SESSION['cfrealname'] = $lastname.$firstname;
//                $_SESSION['cfusername'] = $username;
//                unset($_SESSION['error']);
//                header("Location: index.php");
//                exit;
//            }else{
////                $_SESSION['error'] = "密码不正确!";
////                header("Location: index.php#login");
////                echo "Invalid Password";
//                echo "<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>";
//                echo "<script>
//             alert('密码不正确!');
//             window.history.go(-1);
//     </script>";
//                exit;
//            }
//        }
//        mysqli_stmt_close($stmt);
//    }
//}else{
//    die('mysqli error: '.mysqli_error($mysqli));
//}
//$mysqli->close();
?>