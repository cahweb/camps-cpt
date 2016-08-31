<!-- registration_files -->
<br>
<label>File/Form:</label>
<input type="file" name="register_files" value="">
<p>Current file: <?php echo substr( strrchr( $register_files, '/' ), 1 ); ?></p>

<!-- how_to_register -->
<h4>How to Register:</h4>
<?php wp_editor($how_to_register, 'how_to_register', $settings['sm']); ?>

<!-- discounts -->
<h4>Discounts:</h4>
<?php wp_editor($discounts, 'discounts', $settings['sm']); ?>