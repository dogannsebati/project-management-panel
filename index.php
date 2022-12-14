<?php

require_once 'controller/inc/function.php';

if ($SH->getAdminSession()) {
    require_once 'interface/header.php';
    if (isset($_GET['page'])) :
        $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
    endif;
    if (isset($page)) {
        if (file_exists($page)) $page = "index";
        include("pages/" . $page . ".php");
    } else {
        require_once 'pages/index.php';
    }
    require_once 'interface/footer.php';
} else {
    require_once 'pages/login.php';
}
