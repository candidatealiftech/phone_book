<h3>UPDATE PHONE</h3><hr>
<form action="{{ route ('update_save_phone', $update_phone->id) }}" method="POST">
	@csrf {{method_field('PATCH')}}
	<p>
		<input type="text" name="phone_number" value="{{ $update_phone->phone_number }}" required>
	</p>
	<p>
		<button>Update Phone</button>
	</p>
</form>