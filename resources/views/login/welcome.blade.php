@extends("app")
<!-- 标题 -->
@section("web-title")
	--欢迎--
@endsection
<!-- 样式 -->
@section("web-style")

@endsection

<!-- 网页内容 -->
@section("web-content")
<div class="web-content">
    <h1 class="wel-style">WELCOME</h1>
    <button class="wel-btn" id = "login-btn">LOGIN</button>
    <button class="wel-btn" id = "regist-btn">REGIST</button>
</div>
<script type="text/javascript">
	JQ(document).ready(function(){
		JQ("#login-btn").click(function(){
			window.location.href = "/login";
		});
		JQ("#regist-btn").click(function(){
			window.location.href = "/regist";
		});
	});
</script>
@endsection