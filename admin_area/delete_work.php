<!doctype html>

<?php    
    session_start();
    require_once('db.php');
    $id = $_GET['id'];

    if(isset($_GET['id'])){

        $sql="DELETE FROM `work` WHERE `worknum`=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: index.php#education-work");
        }
    
    }
?>
