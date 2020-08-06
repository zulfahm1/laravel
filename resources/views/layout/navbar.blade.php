
<nav>
	<span> {{ auth()->check() ? auth()->user()->name : '-'}}</span>
	||
	<a href="/guardians">Guardian</a>
	<a href="/students">Students</a>
	<form method="post" action="/logout">
		@csrf

		<button>logout</button>
		
	</form>
</nav>