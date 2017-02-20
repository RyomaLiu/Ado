@extends("app")
<!-- 标题 -->
@section("web-title")
	--注册--
@endsection

@section("web-style")
<style type="text/css">
	.web-content{
		height: 250px;
		margin-top: -125px;
	}
</style>
@endsection

@section("web-content")
<div class="web-content">
	{!! Form::open(["url"=>"regist/do"]) !!}
	{!! Form::text("user_name","",["placeholder"=>"用户名","class"=>"input_style"]) !!}
	<br>
	{!! Form::password("user_password",["placeholder"=>"密码","class"=>"input_style"]) !!}
	<br>
	{!! Form::password("user_password_confirm",["placeholder"=>"密码确认","class"=>"input_style"]) !!}
	<br>
	{!! Form::submit("注册",["class"=>"wel-btn"]) !!}
	{!! Form::close() !!}
</div>


@endsection