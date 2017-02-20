@extends("app")
<!-- 标题 -->
@section("web-title")
	--登录--
@endsection

@section("web-style")
<style type="text/css">
	.web-content{
		height: 200px;
		margin-top: -100px;
	}
</style>
@endsection

@section("web-content")

<div class="web-content">
	{!! Form::open(["url"=>"login/do"]) !!}
	{!! Form::text("user_name","",["placeholder"=>"用户名","class"=>"input_style"]) !!}
	<br>
	{!! Form::password("user_password",["placeholder"=>"密码","class"=>"input_style"]) !!}
	<br>
	{!! Form::submit("登录",["class"=>"wel-btn"]) !!}
	{!! Form::close() !!}
</div>

@endsection