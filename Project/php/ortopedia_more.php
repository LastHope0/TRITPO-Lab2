<!doctype html>
<html>
    <head>
        <title>Health - Ортопедия подробнее</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            session_start();
            if(!isset($_SESSION['theme']))
                $_SESSION['theme'] = 'light';
        
            if($_SESSION['theme'] == 'light')
                echo "<link href=\"../css/terapevtia.css\" rel=\"stylesheet\">";
            else
                echo "<link href=\"../css/terapevtiaDark.css\" rel=\"stylesheet\">";
        ?>
        <link href="../css/options.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container-1">
            <div class="container-2">
                <header>
                    <div class="header-left-part">
                        <a href="../php/main_page.php">
                            <img src="../img/heart.png" width="110px">
                        </a>
                        <div class="header-title">
                            <p class="header-title-part1">Health</p>
                            <p>Частная клинка</p>
                        </div>
                    </div>
                    <div class="header-right-part">
<?php

if(isset($_SESSION['name']))
{
    echo "<img src=\"../img/user.png\" width=\"50px\">
          <div class=\"profile-part\">
                <p class=\"profile-part-welcome\">".$_SESSION['name']." ".$_SESSION['surname']."</p>
                <a href=\"personal_page_profile.php\"><p>Личный кабинет</p></a>
                <a href=\"logout.php\"><p>Выйти из учетной записи</p></a>
          </div>";
}
else if(isset($_COOKIE['name']))
{
    echo "<img src=\"../img/user.png\" width=\"50px\">
          <div class=\"profile-part\">
                <p class=\"profile-part-welcome\">".$_COOKIE['name']." ".$_COOKIE['surname']."</p>
                <a href=\"personal_page_profile.php\"><p>Личный кабинет</p></a>
                <a href=\"logout.php\"><p>Выйти из учетной записи</p></a>
          </div>";
}
else
{
    echo "<a href=\"login.php\">
                <input type=\"submit\" value=\"Войти\">
          </a>
          <a href=\"register.php\">
                <input type=\"submit\" value=\"Зарегистрироваться\">
          </a>";
}

?>
                    </div>
                </header>
                
                <div class="options_container">
                    <div class="options_flex">
                        <form class="more_button" action="changeTheme.php" method="post">
                            <input name="page" value="ortopedia_more" hidden>
                            <?php
                                if($_SESSION['theme'] == 'light')
                                    echo "<input type=\"submit\" value=\"Темная тема\" onclick=\"changeTheme()\">";
                                else
                                    echo "<input type=\"submit\" value=\"Светлая тема\" onclick=\"changeTheme()\">";
                            ?>
                        </form>
                    </div>
                </div>
                
                <div class="main-info">
                    <img src="../img/ortopedia_img.png">
                    <div class="ml-30">
                        <p class="main-info-text">Травматолог-ортопед – врач, занимающийся лечением врожденных и приобретенных заболеваниях опорно-двигательного аппарата, к которым можно отнести и недомогания, которые возникают из-за порока в развитии скелета. В работу ортопеда входит скорое оказание первой медицинской помощи при различного рода повреждениях или травмах, а также назначение соответствующего курса лечения, контроль над процессом выздоровления и последующей реабилитации. Первоочередная задача деятельности врача этой направленности состоит в том, чтобы обеспечить каждому, кто обращается за помощью, значительное повышение качестве жизни. В большой степени это зависит от квалификации, опыта и имеющихся знаний врача, но при этом имеет значение и ответственность самого пациента в отношении своего здоровья, своевременное обращение за медицинской помощью при появлении первых симптомов и недомогания.</p>
                    </div>
                </div>
                <p class="main-info-text">Первичная консультация ортопеда в Минске доступна в частной поликлинике «Анатомия». Врачи Центра, имеющие ценный опыт в этой сфере, готовы заняться проблемой этого профиля независимо от степени сложности ситуации. В основе работы каждого нашего врача лежит принцип заботы о пациентах и внимательном отношении к ним с применением навыков и профессионализма.</p>
                <hr>
                
                <p class="main-info-title">Как проходит прием у специалиста</p>
                <p class="main-info-text">Каждый платный ортопед начинает беседу с пациентом со сбора жалоб, а также выяснения фактов, предшествующих появлению болезни. Полученный анамнез врач изучает и анализирует, выявляя возможные причины возникновения боли и других неприятных ощущений. Важно понимать, что любому специалисту будет проще понять причины заболевания, а значит и найти варианты его излечения, если он будет знать об имеющихся отягощающих факторах, вредных привычках клиента, а также его наследственности относительно болезней скелета и суставов. После беседы прием ортопеда обязательно включает профессиональный осмотр, чтобы выявить или исключить различные варианты деформации скелета, а также проверить подвижность каждого сустава. На этом этапе врач уже может дать предварительный диагноз, и чтобы его проверить, обычно назначается дополнительное исследование с помощью современных компьютерных аппаратов: рентген, УЗИ, КТ или МРТ. Ультразвуковые исследования суставов не требуют специальной предварительной подготовки и могут быть выполнены в любое время. Если необходимо осмотреть какой-либо участок тела, перед началом процедуры сообщите врачу о плохом самочувствии и приеме лекарств, назначенных другим специалистом.</p>
                <p class="main-info-text">Каждый врач-ортопед в Минске в МЦ «Анатомия» выработал большой опыт ведения пациентов, имеющих заболевания опорно-двигательного аппарата различной степени сложности, а также запущенности, либо получивших травмы и повреждения разного характера. Актуальные цены на платные услуги ортопеда в нашей поликлинике Вы можете узнать на сайте либо связавшись с администратором по телефону. Теми же способами можно записаться к ортопеду.</p>
                <hr>
                
                <div>
                    <p class="price-title">Цены:</p>
                    <div class="service-block">
                        <p>Первичная консультация врача-ортопеда</p>
                        <p>39 руб. 00 коп.</p>
                    </div>
                    <div class="service-block">
                        <p>Повторная консультация врача-ортопеда (в течение 1 месяца после первичного приёма)</p>
                        <p>30 руб. 00 коп.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>