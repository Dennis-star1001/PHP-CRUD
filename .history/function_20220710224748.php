<?php 

function redirect($page, $messageType, $msg){
    header("Location:$page?$messageType=$msg");
}

?>