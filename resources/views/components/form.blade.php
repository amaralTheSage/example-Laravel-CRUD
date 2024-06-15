<form action={{ route('post.store') }} method="POST">
    @csrf
    @method('post')
    <input type="text" name="postBox" placeholder="Make a post">
    <input type="submit">
</form>
