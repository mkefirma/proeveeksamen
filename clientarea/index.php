<?php

    require './components/Start.php';

    if (isset($_GET['type'])) {
        if ($_GET['type'] === "login") {
            require './pages/login.php';
        } else if ($_GET['type'] === "register") {
            require './pages/register.php';
        } else if ($_GET['type'] === "logout") {
            session_unset();
            session_destroy();
            header('Location: ./?type=login');
        }
        if (isset($_SESSION['loggedin'])) {
            header('Location: ./?page=dashboard');
        }
    }

    if (isset($_GET['page'])) {
        if ($_GET['page'] === "dashboard") {
            require './pages/dashboard.php';
        } else if ($_GET['page'] === "account") {
            require './pages/account.php';
        } else if ($_GET['page'] === "manage-settings") {
            require './pages/manage-settings.php';
        } else if ($_GET['page'] === "create-settings") {
            require './pages/manage-settings.php';
        } else if ($_GET['page'] === "manage-abouts") {
            require './pages/manage-abouts.php';
        } else if ($_GET['page'] === "create-abouts") {
            require './pages/manage-abouts.php';
        } else if ($_GET['page'] === "manage-travels") {
            require './pages/manage-travels.php';
        } else if ($_GET['page'] === "create-travels") {
            require './pages/manage-travels.php';
        } else if ($_GET['page'] === "manage-contacts") {
            require './pages/manage-contacts.php';
        } else if ($_GET['page'] === "create-contacts") {
            require './pages/manage-contacts.php';
        } else if ($_GET['page'] === "manage-users") {
            require './pages/manage-users.php';
        } else if ($_GET['page'] === "create-users") {
            require './pages/manage-users.php';
        } 
    }

    require './components/End.php';

?>