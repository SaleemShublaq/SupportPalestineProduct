<?php
function redirect($url){ 
    if(headers_sent()){
        echo "<script type=\"text/javascript\">window.location=\"$url\";</script>";
    }
    else{
         header("location:$url");
    }
      return;
}
?>
