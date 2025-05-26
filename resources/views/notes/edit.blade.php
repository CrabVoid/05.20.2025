<h1>Note number: {{ $note->id }}</h1>
<a href="/index">return</a>

<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label>Title</label>
    <input type="text" name="title" value="{{ $note->Title }}">

    <label>Content</label>
    <input type="text" name="content" value="{{ $note->content }}">

    <button type="submit">Update</button>
</form>
