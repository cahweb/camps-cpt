<?php 
/* General form */
?>

<!-- eligibility -->
<h4>Eligibility:</h4>
<?php wp_editor($eligibility, 'eligibility', $settings['sm']); ?>

<!-- ability_level -->
<h4>Ability Level:</h4>
<?php wp_editor($ability_level, 'ability_level', $settings['sm']); ?>

<!-- auditions -->
<h4>Auditions:</h4>
<?php wp_editor($auditions, 'auditions', $settings['sm']); ?>

<!-- instruments -->
<h4>Instruments:</h4>
<?php wp_editor($instruments, 'instruments', $settings['sm']); ?>

<!-- private_lessons -->
<h4>Private Lessons:</h4>
<?php wp_editor($private_lessons, 'private_lessons', $settings['sm']); ?>

<!-- staff -->
<h4>Staff:</h4>
<?php wp_editor($staff, 'staff', $settings['sm']); ?>
