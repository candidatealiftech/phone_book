<h3>Login</h3>
<form action="{{ route ('signin') }}" method="POST">
	@csrf
	<p>
		<input type="text" name="login" placeholder="Login" required>
	</p>
	<p>
		<input type="password" name="password" placeholder="Password" required>
	</p>
	<p>
		<button>Signin</button>
	</p>
</form><hr>
<a href="{{ route ('register') }}">
	<button>Signup</button>
</a>