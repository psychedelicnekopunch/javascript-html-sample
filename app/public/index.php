<!doctype html>

<html>
<head>
	<meta charset='utf8'>
	<meta name='viewport' content='width=device-width'>
	<title>js html sample</title>
	<style media="all">
		body, html {
			padding: 0;
			margin: 0;
		}

		.red {
			background: #f66;
		}
	</style>
</head>

<body>
	<div id="app">
		sample
	</div>

	<div class="appclass">
		sample2
		<form class="" action="index.html" method="post">
			フォーム
		</form>
	</div>
	<div class="appclass">sample2</div>

	<script type="text/javascript">
		// console.log(window)
		// console.log(window.document)
		// console.log(document)

		// クロージャー、スコープ
		let self = this
		let str = "string"
		// 関数
		function f() {
			function f2() {
				let str = "string in f2"
				let str2 = "string"
				console.log('f2')
				console.log(str)
			}
			f2()
			console.log(str2)
			return 'test'
		}

		// f()
		// f2()

		// console.log(f())

		// let obj = {}

		// オブジェクト
		let obj = {
			test: 'testだよ',
			f: function() {
				return 'メソッド'
			},
		}

		// プロパティ
		// console.log(obj.test)

		// メソッド
		// console.log(obj.f())


		// let arr = []

		// let target = document.getElementById('app')
		// let target = document.querySelector('.appclass')
		let target = document.querySelectorAll('.appclass')

		console.log(target)

		target[1].innerHTML = "sample3"

		target[1].className = target[1].className + " red"
		// target[1].className = "red"


		// let target2 = document.querySelectorAll('.appclass')
		// console.log(target2)

		target[1].addEventListener('click', function(e) {
			// console.log('click')
			console.log(e)
		})

		// target[1].addEventListener('mousemove', function(e) {
		// 	console.log(e)
		// })

		// コールバック
		let sample = function(eventType, callback) {
			if (eventType == 'click') {
				callback('クリック イベント', [1, 2, 3])
			}
			if (eventType == 'mousemove') {
				callback('mousemove イベント', [4, 5, 6])
			}
		}

		function sample2(callback) {
			console.log('コールバック2')
			callback()
		}

		function init() {
			console.log('init')
		}

		// function sample() {}

		/*sample('mousemove', function(e, v) {
			window.setTimeout(function() {
				console.log('コールバック')
				console.log(e)
				console.log(v)
				sample2(function() {
					init()
				})
			}, 1000)
		// })*/

		// sample('click', function(e, v) {
		// 	console.log('コールバック')
		// 	console.log(e)
		// 	console.log(v)
		// })

		// init()

		let test = {
			res: 'れす',
			err: 'えらー',
			then: function(callback) {
				// callback(this.res)
				return this
			},
			catch: function(callback) {
				// callback(this.err)
				return this
			},
			get: function() {
				return this
			},
		}

		// console.log(test)
		// console.log(test.get())
		// console.log(test.catch())
		// console.log(test.then())

		// チェーンメソッド
		/*test.get()
			.then(function(res) {
				console.log(res)
			})
			.catch(function(err) {
				console.log(err)
			})
			.then(function() {
				console.log('always executed')
			})*/

		// 即時関数
		// (function(v) {
		// 	console.log(v)
		// 	console.log('即時')
		// }('aaaa'))

		// デザパタ: モジュールパターン

		let modu = function() {

			let pri = 'private'
			let pub = 'public'

			return {
				pub: pub,
				getPri: function() {
					return pri
				},
			}
		}

		let m = new modu

		console.log(m)

		console.log(m.pub)
		console.log(m.getPri())

		m.pub = 'change'
		m.pri = 'change2'

		console.log(m)
		console.log(m.getPri())

	</script>
</body>
</html>
