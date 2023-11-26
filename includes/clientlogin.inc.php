<?php 
include_once 'client_conn.inc.php';

if (isset($_POST['login'])) {
    # code...
    loginFunction($conn);
}

function loginFunction($conn){
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql_query = mysqli_query($conn, "SELECT * FROM client_signin WHERE email = '$email' AND password='$password'");
        if ($sql_query->num_rows > 0) {
            # code...
            header('location: client_login');
        }
        else{

            session_start();
            $_SESSION['error'] = 'Wrong Credentials';
            header('location: blog');
            
        }
    
    }
    else {
        echo"error here";
    }
}


