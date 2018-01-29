<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

echo '
<div class="form-group">
	<label>Product Name</label>
	<input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'">

	<labe>Image</label>
	<input name="image" class="form-control" type="file" value="'.$items[$id]['image'].'">

	<labe>Price</label>
	<input name="price" class="form-control" type="text" value="'.$items[$id]['price'].'">

	<label>Description</label>
	<input name="description" class="form-control" type="text" value="'.$items[$id]['description'].'">

';

	$categories = ['category1', 'category2', 'category3'];
	echo '
	<label>Category</label>
	<select class="form-control" name="item_category">';
		foreach ($categories as $category) {
			if ($items[$id]['category'] === $category)
				echo '<option selected>'.$category.'</option>';
			else
				echo '<option>'.$category.'</option>';
		}
	echo'
	</select>
</div>';