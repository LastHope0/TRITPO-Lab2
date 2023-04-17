<?php

    session_start();
    if ($_SESSION['theme'] == 'light')
        $_SESSION['theme'] = 'dark';
    else
        $_SESSION['theme'] = 'light';

    
    if ($_POST['page'] == 'main')
        header("Location: http://localhost:8080/health/php/main_page.php");
    else if ($_POST['page'] == 'terapevtia')
        header("Location: http://localhost:8080/health/php/terapevtia.php");
    else if ($_POST['page'] == 'terapevtia_more')
        header("Location: http://localhost:8080/health/php/terapevtia_more.php");
    else if ($_POST['page'] == 'ortopedia')
        header("Location: http://localhost:8080/health/php/ortopedia.php");
    else if ($_POST['page'] == 'ortopedia_more')
        header("Location: http://localhost:8080/health/php/ortopedia_more.php");
    else if ($_POST['page'] == 'nevrologia')
        header("Location: http://localhost:8080/health/php/nevrologia.php");
    else if ($_POST['page'] == 'nevrologia_more')
        header("Location: http://localhost:8080/health/php/nevrologia_more.php");
    else if ($_POST['page'] == 'andocrinolog')
        header("Location: http://localhost:8080/health/php/andocrinolog.php");
    else if ($_POST['page'] == 'andocrinolog_more')
        header("Location: http://localhost:8080/health/php/andocrinolog_more.php");
    else if ($_POST['page'] == 'pp_myTickets')
            header("Location: http://localhost:8080/health/php/pp_myTickets.php");
    else if ($_POST['page'] == 'pp_tickets')
            header("Location: http://localhost:8080/health/php/pp_tickets.php");
    else if ($_POST['page'] == 'orderTicket')
            header("Location: http://localhost:8080/health/php/orderTicket.php");
    else if ($_POST['page'] == 'personal_page_profile')
            header("Location: http://localhost:8080/health/php/personal_page_profile.php");
    else if ($_POST['page'] == 'pp_lab')
            header("Location: http://localhost:8080/health/php/pp_lab.php");
    else if ($_POST['page'] == 'pp_ov')
            header("Location: http://localhost:8080/health/php/pp_ov.php");

?>