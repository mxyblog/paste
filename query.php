<?php require_once("./class/mysql_crud.php");?>
<?php
	$idstr;
	$id;
	function myjudge() {
		global $id;
		global $idstr;
		if(!isset($_GET['id'])) {
			return false;
		}
		$idstr = $_GET['id'];
		if(empty($idstr)) {
			return false;
		}
		if(strlen($idstr) != 5) {
			return false;
		}
		sscanf($idstr,"%d", $id);
		if($id <= 0 || $id > 99999) {
			return false;
		}
		return true;
	}
?>
<?php
	if(!myjudge()) {
?>
		<script type="text/javascript">
			var ids = prompt("请输入要查看的内容编号(5位纯数字，包含前导0)：");
			var url = "query.php?id=" + ids;
			window.location = url;
		</script>
<?php
	}
?>
<?php
	$db = new Database();
	$db->connect();
	$db->select('paste_tab','id,poster,posttime,syntax,content',NULL,'id="'.$id.'"');
	$res = $db->getResult();
	if(empty($res)) {
		die ("no such page!");
		return ;
	}else{
		$poster = $res[0]['poster'];
		$posttime = $res[0]['posttime'];
		$syntax = $res[0]['syntax'];
		$content = $res[0]['content'];
	}
?>
<?php
$seo = [
	'title'=>'查询'
]
?>

<?php include_once 'header.php';?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<h3>您的标识码：<?php echo ($idstr);?></h3>
				<p>粘贴者：<?php echo ($poster);?> </p>
				<p>粘贴时间：<?php echo ($posttime);?></p>
				<p><?php echo ($content);?></p>
		</div>
	</div>
</div>
<?php include_once 'footer.php';?>