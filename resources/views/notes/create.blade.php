<form action="/index" method="post">
    @csrf
    Title <input type="text" name="Title">
    <br>
    Content <input type="text" name="content">
    <br>
    <input type="submit" value="Create">
</form>
