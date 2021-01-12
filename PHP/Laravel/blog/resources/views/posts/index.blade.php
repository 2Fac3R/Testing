@foreach ($posts as $post)
    <p>Title: {{ $post->title }}</p>
    <p>Message: {{ $post->body }}</p>
@endforeach