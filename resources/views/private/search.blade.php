<h1>Search Results</h1>
<hr>
@foreach ($search_name as $search_names) 

<table border="2">
	<tr>
		<td>
			{{ $search_names->name }}
		</td>
		<td>
			{{ $search_names->surname }}
		</td>
		<td>
			{{ $search_names->lastname }}
		</td>
	</tr>
</table>

@endforeach 

@foreach ($search_email as $search_emails) 

<table border="2">
	<tr>
		<td>
			{{ $search_emails->email_address }}
		</td>
	</tr>
</table>

@endforeach

@foreach ($search_phone as $search_phones) 

<table border="2">
	<tr>
		<td>
			{{ $search_phones->phone_number }}
		</td>
	</tr>
</table>

@endforeach
