<h3>Contacts:</h3>
<a href="{{ route ('private_page') }}">
	<button>Back to private page</button>
</a><hr>
<form action="{{ route('search') }}" method="GET">
	@csrf
		<input type="search" name="search" placeholder="Search" required>
		<button>Search</button>
</form><hr>

@foreach ($contact as $contacts)

<table border="2">
	<tr>
		<td>
			{{ $contacts->name }}
		</td>
		<td>
			{{ $contacts->surname }}
		</td>
		<td>
			{{ $contacts->lastname }}
		</td>
		<td>
			{{ $contacts->date }}
		</td>
		<td>
			<a href="{{ route ('add_phone', $contacts->id)}}">
				<button>Add Phone</button>
			</a>
		</td>
		<td>
			<a href="{{ route ('add_email', $contacts->id)}}">
				<button>Add Email</button>
			</a>
		</td>
		<td>
			<a href="{{ route ('delete_contact', $contacts->id) }}">
				<button>Delete</button>
			</a>
		</td>
		<td>
			<a href="{{ route ('update_contact', $contacts->id) }}">
				<button>Update</button>
			</a>
		</td>
	</tr>
</table>

@endforeach