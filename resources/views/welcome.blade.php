<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body , ul {
				padding:0;
				margin:0;
			}
			body {
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: block;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				background: -webkit-radial-gradient(rgb(154, 154, 249),rgb(1, 11, 65));/* For Safari 5.1 to 6.0 */
			    background: -o-radial-gradient(rgb(154, 154, 249),rgb(1, 11, 65));/* For Opera 11.1 to 12.0 */
			    background: -moz-radial-gradient(rgb(154, 154, 249),rgb(1, 11, 65)); /* For Firefox 3.6 to 15 */
			    background: radial-gradient(rgb(154, 154, 249),rgb(1, 11, 65)); /* Standard syntax */
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
			.menu ul{
				float:right;
			}
			.menu ul li {
				float: left;
				padding: 5px ;
				color: #FAFAFA;
				font-family: 'Sans sarif';
			}
			header{
				background-color: #009955;
				width: 100%;
				height: 30px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<header class="header">
				<div class="logo ">
				</div>
				<nav class="menu ">
					<ul>
						<li>Home</li>
						<li>About</li>
						<li>Contact</li>
					</ul>
				</nav>
			</header>
			<div class="content">
				<!-- <div class="title">Test</div>
				<div class="quote">{{ Inspiring::quote() }}</div> -->
			</div>
		</div>
	</body>
</html>
