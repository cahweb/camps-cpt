<?php 
/* Schedule form */
?>

<!-- checkin -->
<label>Check-in:</label>
<input type="time" name="checkin" value="<?php echo $checkin; ?>">

<!-- checkout -->
<label>Check-out:</label>
<input type="time" name="checkout" value="<?php echo $checkout; ?>">

<!-- schedule_files -->
<br>
<label>File/Form:</label>
<input type="file" name="schedule_files" value="<?php echo $schedule_files; ?>">

<!-- concert_schedule -->
<h4>Concert Schedule:</h4>
<?php wp_editor($concert_schedule, 'concert_schedule', $settings['sm']); ?>

<!-- activity_schedule -->
<h4>Activity Schedule:</h4>
<?php wp_editor($activity_schedule, 'activity_schedule', $settings['sm']); ?>

<!-- what_to_pack -->
<h4>What to Pack:</h4>
<?php wp_editor($what_to_pack, 'what_to_pack', $settings['sm']); ?>

<!-- housing -->
<h4>Housing:</h4>
<?php wp_editor($housing, 'housing', $settings['sm']); ?>

<!-- shuttle_service -->
<h4>Shuttle Service:</h4>
<?php wp_editor($shuttle_service, 'shuttle_service', $settings['sm']); ?>