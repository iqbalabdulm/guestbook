<?php
//di bawah ini data buat connect ke Database
include 'connect.php';
//$con=mysqli_connect("localhost","root,"","bukutamu")
$user = $_POST['user'];
$email = $_POST['email'];
$comment = $_POST['comment'];
//checnk form kosong
if (empty($user) || empty($email) || empty($comment)) 
{
    echo "Form ada yang kosong, silahkan isi ulang";
}
else 
{
    $query = mysqli_query($con, "insert into tamu set user = '$user',email = '$email', comment = '$comment'");
    if ($query == TRUE) {
        echo "Data berhasil ditambah. silahkan lihat daftar <a href='comment.php'>komentar</a>";
    }
    else {
        echo "error";
    }
}
