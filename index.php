<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">

        <?php include('inc/header.inc.php'); ?>
        
        <div id="page">

            <?php

            $top_title = ''; // additional title with no value
            $status_items = array('Non traitée','En cours','Terminée','Refusée');
            $status_label = array('new','in-progress','done','declined');

            include('inc/custom-select.inc.php');
            ?>

        </div><!-- #page -->
        
        <?php include('inc/footer.inc.php'); ?>
        
    </div><!-- #content -->
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>