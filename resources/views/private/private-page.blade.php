<h3>Welcome private page {{Auth::user()->login}}</h3>
<a href="{{ route ('logout') }}">
	<button>Logout</button>
</a><hr>
<a href="{{ route ('addcontact', Auth::user()->id) }}">
	<button>Add contact</button>
</a><hr>
<a href="{{ route ('view_contacts', Auth::user()->id) }}">
	<button>View Contacts</button>
</a>