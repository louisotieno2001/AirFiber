<?php 
//Redirect based on clicked links
if(isset($_GET['link'])){
    $link = $_GET['link'];

    if ($link === 'index') {
        # code...
        header("Location: index.php");
        exit();
    }
    elseif($link === 'home_internet.php'){
        header("Location: home_internet.php");
        exit();
    }
    elseif ($link === 'biz_internet.php') {
        # code...
        header("Location: biz_internet.php");
        exit();
    }
    elseif ($link === 'airfibre_faqs.php') {
        # code...
        header("Location: airfibre_faqs.php");
        exit();
    }
    elseif ($link === 'airfiber_get_connected.php') {
        # code...
        header("Location: airfiber_get_connected.php");
        exit();
    }
    elseif ($link === 'airfiber_email.php') {
        # code...
        header("Location: airfiber_email.php");
        exit();
    }
    elseif ($link === 'airfiber_company.php') {
        # code...
        header("Location: airfiber_company.php");
        exit();
    }
    elseif ($link === 'airfiber_mission.php') {
        # code...
        header("Location: airfiber_mission.php");
        exit();
    }
}

?>