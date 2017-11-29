    <script type="text/javascript">
	
		history.pushState(null, null, location.href);
		window.onpopstate = function (event) {
			history.go(1);	
		};

		window.oncontextmenu = function () {
			return false;
		};

	</script>

	</body>
</html>
