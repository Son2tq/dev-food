<?php
loadModel('CategoryModel');
$data = null;

function index()
{
	global $data;
	$categorys = getAllCategory();

	view('layouts/index', [
		'content' => 'category/index',
		$data = [
			'categorys' => $categorys
		]
	]);
}

function delete()
{
	$id = $_GET['id'];
	deleteCategory($id);
	header('location: index.php?controller=category');
}

function add()
{
	global $data;

	view("layouts/index", [
		'content' => 'category/form',
		$data = []
	]);
}
function saveadd()
{
	addCategory();
	header("location: index.php?controller=category&action=index");
}

function edit()
{
	global $data;
	$category = getOneCategory();
	view('layouts/index', [
		'content' => 'category/edit',
		$data = [
			'category' => $category
		]
	]);
}
function saveadd(){

function update()
{
	updateCategory();
	header("location: index.php?controller=category&action=index");
}

?>