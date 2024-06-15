<div class="post-card">
    <span>{{ $post->content }}</span>
    <form action="{{ route('post.update', $post) }}" method="POST">
        @csrf
        @method('POST')

        <input type="text" name="updateBox">
        <input type="submit" value="UPDATE">
    </form>

    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="🗑️">
    </form>
</div>
