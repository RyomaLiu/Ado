<!DOCTYPE html>
<html>
<head>
	<title>@yield("web-title")</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset("/css/mycss.css")}}">
	<script src="{{URL::asset("/js/jquery-3.1.1.js")}}"></script>
	<script type="text/javascript" src="{{URL::asset("/js/myfunction.js")}}"></script>
	<style type="text/css">
		.web-main {
			background: #CCBBAA;
			position: absolute;
			left: 2px;
			top: 2px;
			right: 2px;
			bottom: 2px;
			border-radius: 2px;
		}
	</style>
	@yield("web-style")
</head>
<body>
<div class="web-main">
	@yield("web-content")
</div>
</body>
</html>