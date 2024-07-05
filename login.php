<?php

$DATABASE_HOST = '127.0.0.1:3306';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'milestone-p0';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//inisialisasi session
session_start();

$error = '';
$validate = '';

//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
    // menghilangkan backshlases
    $username = stripslashes($_POST['username']);
    //cara sederhana mengamankan dari sql injection
    $username = mysqli_real_escape_string($con, $username);
    // menghilangkan backshlases
    $password = stripslashes($_POST['password']);
    //cara sederhana mengamankan dari sql injection
    $password = mysqli_real_escape_string($con, $password);
    
    //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
    if(!empty(trim($username)) && !empty(trim($password))){
        
        //select data berdasarkan username dari database
        $query      = "SELECT * FROM users WHERE username = '$username'";
        $result     = mysqli_query($con, $query);
        $rows       = mysqli_num_rows($result);
        
        if ($rows != 0) {
            $hash   = mysqli_fetch_assoc($result)['password'];
            // exit('success to logged in 2');
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
                    
                    echo '<script>
                        localStorage.setItem("isLogin", "true");
                        window.location.href = "home.php";
                    </script>';
                }
                            
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 


?>