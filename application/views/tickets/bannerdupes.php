<?php
// Create ticket 
if($action == 'create') : 
?>
<label for="good_id">Good id:</label>&nbsp;<input name="good_id" type="text" value="<?=$good_id ?>" />
<label for="bad_id">Bad id:</label>&nbsp;&nbsp;<input name="bad_id" type="text" value="<?=$bad_id ?>" />
<br /><label for="comment">Comment:</label><br />
<textarea name="comment" cols="10" rows="100" value="<?=$comment ?>"></textarea>
<?php 
// Edit ticket
elseif($action == 'edit'): 
?>
<label for="good_id">Good id:</label>&nbsp;<input name="good_id" type="text" value="<?=$good_id ?>" />
<label for="bad_id">Bad id:</label>&nbsp;&nbsp;<input name="bad_id" type="text" value="<?=$bad_id ?>" />
<br /><label for="comment">Comment:</label><br />
<textarea name="comment" cols="10" rows="100" value="<?=$comment ?>"></textarea>
<?php
// Delete ticket
elseif($action == 'delete'): 
?>
Permenantly delete ticket #<?=$ticket ?>?<br />
<input type="submit" name="delete" value="Yes" />
<input type="submit" name="delete" value="No" />
<?php
// View ticket
else: 
?>
<span id="item_good_id"><?=$good_id ?></span>
<span id="item_bad_id"><?=$bad_id ?></span>
<span id="item_comment"><?=$comment ?></span>
<?php
  // Load discussion view
  // Load phase view
?>
<?php endif; ?>