<!DOCTYPE html>
<html>
<head>
	<title>@yield('Title')</title>
</head>
<body>

	<header>
		<nav class="base">
		    <ul>
		        <li><a href="/">Home</a></li>
		        <li><a href="/profile">Profile</a></li>
		        <li><a href="/task">Task</a></li>
		        <li><a href="/login">Login</a></li>
		    </ul>
		</nav>
	</header>
	</br>
	
	@yield('Content')

	</br>
	<footer>
		<p>
			Copyright &copy; Unindra PGRI 2017
		</p>
	</footer>
	</body>
</html>