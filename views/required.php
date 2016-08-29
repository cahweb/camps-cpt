<?php 
/* Required form */
?>

<table class="table">

	<!-- dates -->
	<tr>
		<td><label>Start Date:</label></td>
		<td><input type="date" name="start_date" value="<?php echo $start_date; ?>"></td>
	</tr>
	<tr>
		<td><label>End Date:</label></td>
		<td><input type="date" name="end_date" value="<?php echo $end_date; ?>"></td>
	</tr>

	<!-- location -->
	<tr>
		<td><label>Location:</label></td>
		<td><input type="text" name="location" value="<?php echo $location; ?>"></td>
	</tr>

	<!-- location_url -->
	<tr>
		<td><label>Location URL:</label></td>
		<td><input type="url" name="location_url" value="<?php echo $location_url; ?>"></td>
	</tr>

	<!-- description -->
	<tr>
		<td><label>Description:</label></td>
		<td><input type="text" name="description" value="<?php echo $description; ?>"></td>
	</tr>
	<!-- cost -->
	<tr>
		<td><label>Cost:</label></td>
		<td><input type="text" name="cost" value="<?php echo $cost; ?>" placeholder="$"></td>
	</tr>

	<th>Contact:</th>

	<!-- contact_name -->
	<tr>
		<td><label>Name:</label></td>
		<td><input type="text" name="contact_name" value="<?php echo $contact_name; ?>"></td>
	</tr>

	<!-- contact_email -->
	<tr>
		<td><label>Email:</label></td>
		<td><input type="email" name="contact_email" value="<?php echo $contact_email; ?>"></td>
	</tr>

	<!-- contact_tel -->
	<tr>
		<td><label>Telephone:</label></td>
		<td><input type="tel" name="contact_tel" value="<?php echo $contact_tel; ?>"></td>
	</tr>


</table>