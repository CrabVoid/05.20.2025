<h1>Notes</h1>

<a href="/create">create a new</a>
<br>
    <ul>
       @foreach($notes as $note)
        <li> 
            {{ $note->Title }}
            <br>
            {{ $note->content }}
            <br>
            <a href="/index/{{ $note->id }}">show</a>
    
       @endforeach
    </ul>
