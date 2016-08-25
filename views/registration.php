<!-- registration_files -->
<br>
<label>File/Form:</label>
<input type="file" name="registration_files" value="<?php echo $registration_files; ?>">

<!-- how_to_register -->
<h4>How to Register:</h4>
<?php wp_editor($how_to_register, 'how_to_register', $settings['sm']); ?>

<!-- discounts -->
<h4>Discounts:</h4>
<?php wp_editor($discounts, 'discounts', $settings['sm']); ?>