<?php

define('tableCategory', 'categorys');
define('tableProduct', 'products');

function getAllCategory()
{
	$data = all(tableCategory);
	return $data;
}

function deleteCategory($id) {
	remove(tableCategory, $id);
}


?>