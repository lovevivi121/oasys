<?php
setcookie("islogin",2,time()-3000,'/');
echo json_encode(array("logout"=>"yeslogout"));

?>