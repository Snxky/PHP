<?php
if (ini_get("Session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time() - 4200,"/"
    );
}


?>