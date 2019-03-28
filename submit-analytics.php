<?php
if (!empty($_POST['url'])) {

    $redirect = "analytics/".$_POST['url']."/index.php";

    if(file_exists($redirect) == true) {
        header('Location: ' . $redirect);
        die();
    }
    else {
        require 'config.php';
        echo "<head>";
        echo "<title>";
        echo "$title";
        echo "</title>";
        echo "</head>";
        include 'inc/nav.php';
        echo "<br>";
        echo "<div style='margin-left:5%;'>";
        echo "Domain not found, You are good to create one with this extension!";
        echo "</div>";
        include 'inc/footer.php';
    }

}
?>