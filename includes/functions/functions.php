<?php

function getTitle()
{
 global $pageTitle;
 if(isset($pageTitle))
 {
   echo $pageTitle;
 }
 else {
   # code...
   echo 'Default';
 }
}


/////  Couont number of users   //////////
function countItems($item, $table)
{
  global $db;
  $query2 = $db->prepare("SELECT COUNT($item) FROM $table");
  $query2->execute();
  echo $query2->fetchColumn();
}

function countItem($items, $table)
{
  global $db;
  $query2 = $db->prepare("SELECT COUNT($items) FROM $table");
  $query2->execute();
  echo $query2->fetchColumn();
}

/////   Count number of items that are not being  approved  /////////// 
function checkItem($select, $from,$value)
{
  global $db;
  $statement = $db->prepare("SELECT $select  FROM $from WHERE $select=?");
  $statement->execute(array($value));
  echo $statement->rowCount();
 
}

//////   Count All Items   ////////


////// Get Latest Record items  //////

function getLatest()
{
	global $db;
	$statement=$db->prepare("SELECT * FROM user ORDER BY uid Limit 5 ");
	$statement->execute();
	$row=$statement->fetchAll();
	return $row;
}
function getLatestitem()
{
  global $db;
  $statement=$db->prepare("SELECT * FROM product ORDER BY id Limit 5 ");
  $statement->execute();
  $row=$statement->fetchAll();
  return $row;
}
