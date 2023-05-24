<!doctype html>

<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width">
	<title>clipboard - js html sample</title>
	<link rel="stylesheet" href="/css/bundle.css?<?php echo time() ?>">
</head>

<body>

	<input id="InputText" type="text" name="" value="copy text">
	<button type="button" onclick="javascript:copy()">copy</button>

	<!-- <script src="/js/bundle.js?<?php echo time() ?>"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard-polyfill/4.0.0/es5/overwrite-globals/clipboard-polyfill.overwrite-globals.es5.js"></script>
	<script type="text/javascript">
		// const clipboard = window.pn.clipboard
		// console.log(clipboard)

		// clipboard-polyfill
		// function copy() {
		// 	const target = document.getElementById('InputText')
		// 	if (!target) { return }
		// 	navigator.clipboard.writeText(target.value).then(
		// 		() => { console.log('success') },
		// 		() => { console.log('failed') }
		// 	)
		// }

		// Vanilla JS
		function copy() {
			// navigator.permissions.query({name:'clipboard-write'}).then(function(permissionStatus) {
			// 	console.log('clipboard write のパーミッションの状態は ' + permissionStatus.state + ' です。');
			// 	permissionStatus.onchange = function() {
			// 		console.log('位置情報のパーミッションの状態が ' + this.state + ' に変更されました。');
			// 	}
			// })
			const target = document.getElementById('InputText')
			if (!target) { return }
			if (navigator.clipboard) {
				navigator.clipboard.writeText(target.value).then(
					() => { console.log('success') },
					() => { console.log('failed') }
				)
				return
			}
			target.select()
			document.execCommand('copy')
			console.log('success')
		}
	</script>
</body>
</html>
