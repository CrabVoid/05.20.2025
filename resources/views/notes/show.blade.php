<h1>Note number: {{ $note->id }}</h1>

<h3>{{ $note->Title }}</h1>
<p>{{ $note->content }}</p>

<a href="/index">return</a>

<br>
<br>
<form action="{{ route('notes.destroy', $note->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
