<h3>UPDATE CONTACT</h3><hr>
<form action="{{ route ('update_save_contact', $update_contact->id) }}" method="POST">
	@csrf {{method_field('PATCH')}}
	<p>
		<input type="text" name="name" value="{{ $update_contact->name }}" required>
	</p>
	<p>
		<input type="text" name="surname" value="{{ $update_contact->surname }}" required>
	</p>
	<p>
		<input type="text" name="lastname" value="{{ $update_contact->lastname }}" required>
	</p>
	<p>
		<button>Update Contact</button>
	</p>
</form>