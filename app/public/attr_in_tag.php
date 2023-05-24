<!doctype html>

<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width">
	<title>attr in tag - js html sample</title>
	<link rel="stylesheet" href="/css/bundle.css?<?php echo time() ?>">
</head>

<body>

	<div
		id="div"
		class=""
		data-sameNumber=1
		data-array=[1,2,3,4,5]
		data-hello-world="hello, world"
	></div>

	<script type="text/javascript">
		(function() {
			const target = document.getElementById('div')
			if (!target) { return }
			console.log(target.dataset)
		})()
	</script>
</body>
</html>
