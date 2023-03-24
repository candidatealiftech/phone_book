<h3>UPDATE EMAIL</h3><hr>
<form action="{{ route ('update_save_email', $update_email->id) }}" method="POST">
	@csrf {{method_field('PATCH')}}
	<p>
		<input type="text" name="email_address" value="{{ $update_email->email_address }}" required>
	</p>
	<p>
		<button>Update Email</button>
	</p>
</form>