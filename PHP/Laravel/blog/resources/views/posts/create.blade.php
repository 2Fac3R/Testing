<form method="POST" action=" {{ route('posts.store') }}">
    @csrf

    Title: <input type="text" name="title"> <br>
    Body:  <input type="textarea" name="body"> <br>

    <input type="submit" name="submit" value="Submit!">
</form>