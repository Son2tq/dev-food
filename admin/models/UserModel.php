<?php
define('tableNameUser', 'users');

function getAllUser()
{
     $data = findColumn(tableNameUser, 'role_id', 2);
     return $data;
}
function deleteUser()
{
     $id = $_GET['id'];
     // var_dump($id);die;
     remove(tableNameUser, $id);
}

?>