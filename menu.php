<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">タイトル</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbarEexample1">
			<ul class="nav navbar-nav" id="menu">
				<li><a href="https://test-app-3285.herokuapp.com/index.php">メニューＡ</a></li>
				<li><a href="https://test-app-3285.herokuapp.com/page_b.php">メニューＢ</a></li>
				<li><a href="https://test-app-3285.herokuapp.com/page_c.php">メニューＣ</a></li>
			</ul>
		</div>
	</div>
</nav>
<script type="text/javascript">
$(function(){
$('#menu li').each(function(){
var $href = $(this).children('a').attr('href');
if(location.href.match($href)) {
$(this).addClass('active');
} else {
$(this).removeClass('active');
}
});
});
</script>