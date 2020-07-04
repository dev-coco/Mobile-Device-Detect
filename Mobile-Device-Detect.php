<?php
if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
    /* Do something here.
 Header("Location:https://www.google.com");
     */
}else{
 /* Do something here.
 Header("Location:https://www.duckduckgo.com");
  */
}
?>
