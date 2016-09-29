<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="styles/all.css" type="text/css">
<title>Custom select</title>

</head>
<body>

<div class="content">
    <?php
    $top_title = ''; // additional title with no value
    $status_items = array('Non traitée','En cours','Terminée','Refusée');
    $status_label = array('new','in-progress','done','declined');

    include('inc/custom-select.inc.php');
    ?>
</div>

<!-- scripts -->
<script src="scripts/vendors.min.js"></script>
<script src="scripts/bundle.js"></script>

</body>
</html>