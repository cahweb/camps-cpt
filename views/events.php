<?php 
/* Events form */
?>

<p>Please fill out as many of these fields as possible in order to make the pages look their best. Ommitted fields will be left blank on the pages.</p>
<h3 class="hndle ui-sortable-handle"><span>General</span></h3>
<br/>
<table>
    <tr>
        <td style="text-align:center"><label>Location: </label></td>
        <td><input type="text" name="location" value="<?php echo $location; ?>" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>Link to Location: </label></td>
        <td><input type="text" name="loclink" value="<?php echo $loclink; ?>" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>Start Date: </label></td>
        <td><input type="date" name="sdate" value="<?php echo $sdate; ?>" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>End Date: </label></td>
        <td><input type="date" name="edate" value="<?php echo $edate; ?>" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>Start Time: </label></td>
        <td><input type="time" name="stime" value="<?php echo $stime; ?>" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>End Time: </label></td>
        <td><input type="time" name="etime" value="<?php echo $etime; ?>" size="50"/></td>
    </tr>
</table><br/>
<div style="display:none">
<h3 class="hndle ui-sortable-handle"><span>Banner Image</span></h3>
<p>Make sure to set The Featured image to a large Image. It will be used as the main image for the front page when this exhibit is the newest, and it will be the banner of the exhibit's page.</p>
<table>
    <tr>
        <td style="text-align:center"><label>Caption: </label></td>
        <td><input name="fcaption" value="<?php echo $fcaption; ?>" type="text" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>Artist: </label></td>
        <td><input name="fartist" value="<?php echo $fartist; ?>" type="text" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>Medium: </label></td>
        <td><input name="fmedium" value="<?php echo $fmedium; ?>" type="text" size="50"/></td>
    </tr>
</table>
<br/> 
</div>
<h3 class="hndle ui-sortable-handle"><span>Artist</span></h3>
<p>Make sure to set The Artist image on the right. It will be displayed on the left column of the exhibit page.</p>
<table>
    <tr>
        <td style="text-align:center"><label>Name(s): </label></td>
        <td><input name="aname" value="<?php echo $aname; ?>" type="text" size="50"/></td>
    </tr>
    <tr>
        <td style="text-align:center" valign="top"><label>Description: </label></td>
        <td><textarea name="adesc" cols="50" rows="4"><?php echo $adesc; ?></textarea></td>
    </tr>
    <tr>
        <td style="text-align:center"><label>Website: </label></td>
        <td><input name="awebsite" value="<?php echo $awebsite; ?>" type="text" size="50"/></td>
    </tr>

</table>

