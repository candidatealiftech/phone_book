<h3>Add Contact</h3>
<form action="{{ route ('savecontact', Auth::user()->id) }}" method="POST">
	@csrf
	<p>
		<input type="text" name="name" placeholder="Name" required>
	</p>
	<p>
		<input type="text" name="surname" placeholder="Surname" required>
	</p>
	<p>
		<input type="text" name="lastname" placeholder="Lastname" required>
	</p>
	<p>
		<input type="date" name="date" placeholder="Date of birthday" required>
	</p>
	<p>
		<button>Add Contact</button>
	</p>
</form><hr>
<a href="{{ route ('private_page') }}">
	<button>Back to private page</button>
</a>