<?php
$seo = [
	'title'=>'临时替代QQ、微信的手机和电脑端的文本传输工具'
]
?>

<?php include_once 'header.php';?>
	<div class="container">
		<div class="site-index full-screen text-center">
			<div class="jumbotron">
				<img alt="在线网络剪切板首页二维码" class="img-responsive img-thumbnail" src="qr.png" />
				<h1>电脑手机端互传文本</h1>
				<p>快速从电脑复制文本到手机,解决无法使用QQ、微信传送文本情况下的痛点</p>
			</div>

			<div class="row site-index-parts">
				<div class="col-sm-6">
					<h2>写入</h2>
					<p>新建一块用于电脑和手机之间复制粘贴的一段文本。</p>
					<p><a class="btn btn-lg btn-primary" href="./paste.php" titile="贴一块">贴一块</a></p>
				</div>
				<div class="col-sm-6">
					<h2>读取</h2>
					<p>根据识别码查找一块已经存在的在线空间。</p>
					<p><a class="btn btn-lg btn-success" href="./query.php" titile="找一块">找一块</a></p>
				</div>
			</div>


			<div class="row site-index-parts">
				<h3>其他工具</h3>
				<div class="col-sm-4">
					<p><a href="https://dedewp.com/tools/shoutu.html" rel="noopener">快速提取微信公众号文章视频</a></p>
				</div>
				<div class="col-sm-4">
					<p><a href="https://dedewp.com/tools/index.html" rel="noopener">快速链接提取</a></p>
				</div>
				<div class="col-sm-4">
					<p><a href="https://dedewp.com/tools/media_id.html" rel="noopener">公众号获取图片media_id</a></p>
				</div>
				<div class="col-sm-4">
					<p><a href="https://dedewp.com/tools/webptojpg.html.html" rel="noopener">Webp在线转换为jpg工具</a></p>
				</div>
				<div class="col-sm-4">
					<p><a href="https://dedewp.com/tools/wordpress.html" rel="noopener">批量替换文章内容和更换域名</a></p>
				</div>
				<div class="col-sm-4">
					<p><a href="https://dedewp.com/tools/edit_prefix.html" rel="noopener">修改数据库表前缀</a></p>
				</div>
			</div>

		</div>
	</div>

<?php include_once 'footer.php';?>
