<?php
	require_once("./class/mysql_crud.php");
	if(!isset($_POST['poster']) || !isset($_POST['content'])) {
		return;
	}
	if(!isset($_POST['syntax'])) {
		return;
	}
	$poster = $_POST['poster'];
	$content = $_POST['content'];
	$syntax = $_POST['syntax'];
	if(empty($poster) || empty($content) || empty($syntax)) {
		return;
	}
	$db = new Database();
	$db->connect();
	$data = $db->escapeString($content);
	$db->insert('paste_tab',array('poster'=>$poster,'syntax'=>$syntax,'content'=>$content));
	$res = $db->getResult();
	// print_r($res);
	if($res) {
		$newidstr = sprintf("%05s", $res[0]);
		$url = 'query.php?id=' . $newidstr;
		Header('Location: ' . $url);
	}else {
		die ("error!");
	}
?>
