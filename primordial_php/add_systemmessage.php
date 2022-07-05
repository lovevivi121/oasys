<?php
                                            
    $aa=$_POST['aa'];
    $bb=$_POST['bb'];
    $cc=$_POST['cc'];
    echo "<script>alert('$aa')</script>";
    mysqli_query($con, "INSERT INTO system_message(title, type, time) values('$aa', '$bb', '$cc')");

?>