<h3>Signup</h3>
<form action="{{ route ('signup') }}" method="POST">
	@csrf
	<p>
		<input type="text" name="login" placeholder="Login" required>
	</p>
	<p>
		<input type="password" name="password" placeholder="Password" required>
	</p>
	<p>
		<input type="password" name="password_confirmation" placeholder="Repeat password" required>
	</p>
	<p>
		<button>Signup</button>
	</p>
</form><hr>
<a href="{{ route ('login') }}">
	<button>Login</button>
</a>