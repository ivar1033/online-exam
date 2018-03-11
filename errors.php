<!DOCTYPE html>
<html>
<head>
	
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php if (count($errors) > 0): ?>
	<div class="error">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
</body>
</html>

