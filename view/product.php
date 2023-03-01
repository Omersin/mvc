<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table class="product" id="product">
		<tr>
			<th>Product Name</th>
			<th>Color Name</th>
		</tr>
		<?php foreach ($data as $key => $value) { ?>
			<tr>
				<td><?php print $value['name']; ?></td>
				<td><?php print $value['color']; ?></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>