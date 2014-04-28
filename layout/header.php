<?php 
include($CFG->dirroot . "/local/exam/exam_check.php");

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));
?>
<?php if ($hasheading || $hasnavbar) { ?>
    <div id="page-header">
    <div id="page-header-inner">

        <div id="logoTitle">
                <a href="<?php echo $CFG->wwwroot; ?>"><img id="mainlogo" src="<?php echo $CFG->wwwroot .'/theme/'. current_theme(); ?>/pix/logo.png"></a>

        </div>

        <?php if ($hasheading) { ?>

        <div class="headermenu">
            <div id="profile" class="clearfix">
            <?php
                if ($haslogininfo) {
                    echo $OUTPUT->login_info();
                }
                if (!empty($PAGE->layout_options['langmenu'])) {
                    echo $OUTPUT->lang_menu();
                }
                echo $PAGE->headingmenu;
            ?>
	</div>
	</div>
        <?php } ?>
        <?php if ($hascustommenu) { ?>
        <div id="custommenu"><?php echo $custommenu; ?></div>
        <?php } ?>
        <?php if ($hasnavbar) { ?>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>

            </div>
        <?php } ?>
		<div class="nav-button">            
                    <?php echo $PAGE->button; ?>
                                <?php $path_to_mail = $CFG->wwwroot."/theme/".$CFG->theme."/mail.php?url=".$_SERVER['REQUEST_URI']; ?>
                    <input style="margin-right: 10px;" type="submit" value="<?php echo get_string('report_error', 'theme_learn2012'); ?>" onclick="window.open('<?php print $path_to_mail; ?>','report_error', 'width=325px,height=500px')" />
		</div>
    </div>
    </div>
<?php } ?>
<!-- END OF HEADER -->

