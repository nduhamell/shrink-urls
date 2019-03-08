<?php
if (!empty($_POST['url'])) {

    $redirect = "analytics/".$_POST['url']."/index.php";

    if(file_exists($redirect) == true) {
        header('Location: ' . $redirect);
        die();
    }
    else {
        echo "Domain not found";
    }

}
?>