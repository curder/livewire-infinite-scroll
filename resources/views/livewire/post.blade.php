<div>
    @foreach($posts as $post)
        <div class="space-y-1">
            <h2 class="text-xl font-bold">#{{ $post->id }} {{ $post->name }}</h2>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach
</div>
