<?php
	if (empty($_POST['fname'])) $_POST['fname'] = '[no first name given]'; 
	if (empty($_POST['lname'])) $_POST['lname'] = '[no last name given]'; 
	?>
	<div id="resultForm3" 
		data-blapy-container="true" 
		data-blapy-container-name="resultForm2Json" 
		data-blapy-update="json"
	>
	[
	{fname: "<?php echo $_POST['fname']?>",lname: "<?php echo $_POST['lname']?>"},
	{fname: "<?php echo $_POST['fname']?> bis",lname: "<?php echo $_POST['lname']?> bis"}
	]
	</div>
	