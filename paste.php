<?php
$seo = [
	'title'=>'写入'
]
?>

<?php include_once 'header.php';?>
	<div class="container">
			<h1>写入</h1>
			<form action="./submit.php" method="POST" id="pasteform" name="pasteform">
				<div class="form-group">
					<label for="name">粘贴者</label>
					<input type="text" class="form-control" placeholder="文本输入" name="poster">
				</div>
				<div class="form-group">
					<label for="id_syntax">内容类型</label>
					<select class="form-control" name="syntax" id="id_syntax">
						<option value="text">纯文本</option>
						<option value="php">php代码</option>
						<option value="python">python代码</option>
						<option value="js">Js代码</option>
					</select>
				</div>

				<div class="form-group">
					<label for="name">粘贴内容</label>
					<textarea class="form-control" rows="20" name="content"></textarea>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">提交</button>
					</div>
				</div>

			</form>

			<hr />

			<ul>
				<li>
					<p>可以在内容框中输入任意长度的文本内容，每段一行。</p>
				</li>
				<li>
					<p>内容有效期:15分钟</p>
				</li>
				<li>
					<p>可以在 <a href="./query.php" titile="查找剪贴板">读取</a> 页面输入标识码进行访问。</p>
				</li>
			</ul>

	</div>
<?php include_once 'footer.php';?>