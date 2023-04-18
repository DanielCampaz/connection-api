<?php
    require_once dirname(__FILE__, 3) . '\const\const.php';


    $LIST_NAV = ["Settings","Request", "To Do"];

    $c = 0;

?>
<nav class="connection_api nav">
    <img src="<?php echo $LINK_BASE_PAGE . "/public/sources/logo/Logo.png"?>" alt="">
    <ul>
        <?php
            foreach($LIST_NAV as $l){
                $class;
                if($l === "To Do"){
                    $class = "todo";
                }else if($l === "Request"){
                    $class = "request";
                }
                else if($l === "Settings"){
                    $class = "settings";
                }
                ?>
                    <li class="link connection_api btn <?php echo $class ?>"><h1><?php echo $l ?></h1></li>
                <?php
            }
        ?>
    </ul>
</nav>