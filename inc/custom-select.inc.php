<?php
//$status_items = array('Non traitée','En cours','Terminée','Refusée');
//$status_label = array('new','in-progress','done','declined');
$title = isset($top_title) ? $top_title : '';
$name_id = isset($name_id) ? $name_id + 1 : 0;
$cs_id = !isset($cs_id) ? 0 : $cs_id+1;
?>
<div class="custom-select-container">
    <div class="custom-inside">
        <ul class="custom-select">
            <!-- optional title -->
            <?php if($title != '') { ?>
                <li class="cs-item cs-title cs-selected-item ">
                    <label class="cs-label cs-label-disabled" for="<?php echo 'title-' . $cs_id; ?>">
                        <?php echo $title; ?>
                    </label>
                    <input type="radio" id="<?php echo 'title-' . $cs_id; ?>" name="status-name-<?php echo $name_id; ?>" value="">
                </li>
            <?php } ?>


            <?php for ($j = 0; $j < count($status_items); $j++) { ?>

                <?php
                $label = 'status-' . $status_label[$j];
                $is_declined = ($status_label[$j] == 'declined');
                $is_checked = ($j == 0 && $title == '') ? 'checked="checked"' : '';
                ?>

                <li class="cs-item <?php echo $label; ?>">
                    <label for="<?php echo $label . '-' . $cs_id; ?>" class="cs-label">
                        <?php echo $status_items[$j]; ?>
                    </label>


                    <input type="radio" id="<?php echo $label . '-' . $cs_id; ?>" name="status-name-<?php echo $name_id; ?>" value="<?php echo $j; ?>" <?php echo $is_checked; ?>>
                </li>

            <?php } ?>
        </ul>
    </div>
</div>
<?php
$top_title = ''; // reset
?>