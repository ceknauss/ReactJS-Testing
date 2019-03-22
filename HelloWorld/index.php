<html>

<head>
	<!-- Title -->
	<title>ReactJS Testing </title>

	<!-- ReactJS Script Includes -->
	<!-- DEVELOPMENT SCRIPTS
	<script src="https://unpkg.com/react@16/umd/react.development.js"></script>
	<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
	-->
	<script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
	<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
	<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
</head>

<body>

	<!-- ReactJS Container -->
	<div id="ReactJS_Root"></div>

	<!-- ReactJS -- Page Scripts -->
	<script type="text/babel">
		ReactDOM.render(
			<h1>Hello, world!</h1>,
			document.getElementById('ReactJS_Root')
		);
    </script>

</body>

</html>