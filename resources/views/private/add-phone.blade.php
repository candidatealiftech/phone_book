<h3>Add PHONE NUMBER</h3>
<form action="{{route ('phone_save', $contact->id)}}" method="POST">
	@csrf
	<p>
		<input type="text" name="phone_number" placeholder="Phone Number" required>
	</p>
	<p>
		<button>Add phone</button>
	</p>
</form><hr>
@foreach ($phone_result as $result)

<table border="2">
	<tr>
		<td>
			added phone number: <strong>{{ $result->phone_number }}</strong>
		</td>
		<td>
			<a href="{{ route('delete_phone', $result->id) }}">
				<button>Delete</button>
			</a>
		</td>
		<td>
			<a href="{{ route('update_phone', $result->id) }}">
				<button>Update</button>
			</a>
		</td>
	</tr>
</table>

@endforeach