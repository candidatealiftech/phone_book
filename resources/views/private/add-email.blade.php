<h3>Add EMAIL ADDRESS</h3>
<form action="{{route ('email_save', $contact->id)}}" method="POST">
	@csrf
	<p>
		<input type="email" name="email_address" placeholder="Email Address" required>
	</p>
	<p>
		<button>Add email</button>
	</p>
</form><hr>
@foreach ($email_result as $result)

<table border="2">
	<tr>
		<td>
			added email address: <strong>{{ $result->email_address }}</strong>
		</td>
		<td>
			<a href="{{ route('delete_email', $result->id) }}">
				<button>Delete</button>
			</a>
		</td>
		<td>
			<a href="{{ route('update_email', $result->id) }}">
				<button>Update</button>
			</a>
		</td>
	</tr>
</table>

@endforeach