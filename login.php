<?php
    session_start();
    require_once('db.php');
    
    if(isset($_POST['uname'], $_POST['password'])){
        function validate($data){
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;

        }
        $uname=validate($_POST['uname']);
        $password=validate($_POST['password']);
        
        if(empty($uname)){
            header("Location: admin_login.php?error=Username is required");
            $_SESSION['loggedin'] = false;
            exit;
        }else if(empty($password)){
            header("Location: admin_login.php?error=Password is required");
            $_SESSION['loggedin'] = false;
            exit;
        }else{

            $sql = "SELECT * FROM logindb WHERE uname='$uname' AND password='$password'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['uname'] === $uname && $row['password'] === $password){
                    $_SESSION['loggedin'] = true;
                    header("Location: admin_area/index.php");
                }
            }else{
                header("Location: admin_login.php?error=Incorrecr Username or Password");
                $_SESSION['loggedin'] = false;
                exit;
            }

        }
    
    }else{
        header("Location:/src/admin_login.php");
        $_SESSION['loggedin'] = false;
        exit;
    }
?>