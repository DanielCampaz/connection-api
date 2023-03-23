<?php
    require_once dirname(__FILE__, 3) . '\const\const.php';


    $LIST_NAV = ["To Do", "Request", "Settings"];

    $c = 0;

?>
<nav class="connection_api nav">
    <img src="<?php echo $LINK_BASE_PAGE . "/public/sources/logo/Logo.png"?>" alt="">
    <ul>
        <?php
            foreach($LIST_NAV as $l){
                ?>
                    <li class="link connection_api btn"><h1><?php echo $l ?></h1></li>
                <?php
            }
        ?>
    </ul>
</nav>