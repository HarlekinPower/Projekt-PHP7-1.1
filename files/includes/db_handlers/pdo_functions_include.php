<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: pdo_functions_include.php
| Author: Yodix
| Author: Joakim Falk (Domi)
| Author: Harlekin
| Author: Kanuuu
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
    die("Access Denied");
}
// PDO variable
$pdo = NULL;

$mysql_queries_count = 0;
$mysql_queries_time = array();

// MySQL database functions
function dbquery($query) {
	global $pdo, $mysql_queries_count, $mysql_queries_time;
	/** @var PDO $pdo */
	$mysql_queries_count++;
	$query_time = get_microtime();
	$result = $pdo->prepare($query);
	$query_time = substr((get_microtime()-$query_time), 0, 7);
	$mysql_queries_time[$mysql_queries_count] = array($query_time, $query);
	if (!$result) {
		print_r($result->errorInfo());
		return FALSE;
	} else {
		$result->execute();
		return $result;
	}
}

function dbquery_exec($query) {
	global $pdo, $mysql_queries_count, $mysql_queries_time;
	/** @var PDO $pdo */
	$mysql_queries_count++;
	$query_time = get_microtime();
	$result = $pdo->exec($query);
	$query_time = substr((get_microtime()-$query_time), 0, 7);
	$mysql_queries_time[$mysql_queries_count] = array($query_time, $query);
	return $result;
}

function dbcount($field, $table, $conditions = "") {
	global $pdo, $mysql_queries_count, $mysql_queries_time;
	/** @var PDO $pdo */
	$mysql_queries_count++;
	$cond = ($conditions ? " WHERE ".$conditions : "");
	$query_time = get_microtime();
	$result = $pdo->prepare("SELECT COUNT".$field." FROM ".$table.$cond);
	$query_time = substr((get_microtime()-$query_time), 0, 7);
	$mysql_queries_time[$mysql_queries_count] = array($query_time, "SELECT COUNT".$field." FROM ".$table.$cond);
	if (!$result) {
		print_r($result->errorInfo());
		return FALSE;
	} else {
		$result->execute();
		return $result->fetchColumn();
	}
}

function dbresult($query, $row) {
	global $pdo, $mysql_queries_count, $mysql_queries_time;
	/** @var PDO $pdo */
	$query_time = get_microtime();
	$data = $query->fetchAll();
	$query_time = substr((get_microtime()-$query_time), 0, 7);
	$mysql_queries_time[$mysql_queries_count] = array($query_time, $query);
	if (!$query) {
		print_r($query->errorInfo());
		return FALSE;
	} else {
		$result = $query->getColumnMeta(0);
		return $data[$row][$result['name']];
	}
}

function dbrows($query) {
	return $query->rowCount();
}

function dbarray($query) {
	global $pdo;
	/** @var PDO $pdo */
	$query->setFetchMode(PDO::FETCH_ASSOC);
	return $query->fetch();
}

function dbarraynum($query) {
	global $pdo;
	/** @var PDO $pdo */
	$query->setFetchMode(PDO::FETCH_NUM);
	return $query->fetch();
}

function db_exists($table) {
    global $pdo;
    /** @var PDO $pdo */
    $query = $pdo->prepare('SHOW TABLES LIKE :table');
    $query->bindParam(':table', $table);
    return $query->execute();
}

function dbconnect($db_host, $db_user, $db_pass, $db_name) {
	global $pdo;
	/** @var PDO $pdo */
	try {
		$pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name.";encoding=utf8", $db_user, $db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $error) {
		die("<strong>Unable to select MySQL database</strong><br />".$error->getMessage());
	}
}

function mysql_close() {
    global $pdo;
	/** @var PDO $pdo */
    return $pdo = null;
}

function mysql_insert_id() {
    global $pdo;
    /** @var PDO $pdo */
    return $pdo->lastInsertId();
}

function mysql_get_server_info() {
    global $pdo;
    /** @var PDO $pdo */
    return $pdo->query('select version()')->fetchColumn();
}

function mysql_query($rawQuery) {
    return dbquery($rawQuery);
}

function mysql_real_escape_string($unescaped_string, $connection = null) {
    global $pdo;
    /** @var PDO $pdo */
    return $pdo->quote($unescaped_string);
}

function mysql_connect($db_host, $db_user, $db_pass) {
    global $db_name;
    dbconnect($db_host, $db_user, $db_pass, $db_name);
}

function mysql_select_db($name) {
    return TRUE;
}

function mysql_field_name($result, $field_offset) {
    $columns = [];
    for ($i = 0; $i < $result->columnCount(); $i++) {
        $col = $result->getColumnMeta($i);
        $columns[] = $col['name'];
    }
    return $columns;
}

function mysql_free_result($result) {
    return $result->closeCursor();
}

function mysql_num_rows($result) {
    return dbrows($result);
}

function mysql_affected_rows($connection = null) {
    global $pdo;
    /** @var PDO $pdo */
    return $pdo->rowCount();
}

?>