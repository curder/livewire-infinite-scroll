<div class="space-y-2">
    @foreach($posts as $post)
        <div class="space-y-1">
            <h2 class="text-xl font-bold">#{{ $post->id }} {{ $post->name }}</h2>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach

    @if($this->hasMorePages())
        <div class="pt-6 flex justify-center">
            <button wire:click="loadMore"
                    class="w-56 text-center text-blue-50 hover:text-blue-100 py-1 rounded-md bg-blue-500 hover:bg-blue-600">
                Load
                more
            </button>
        </div>
    @endif
</div>
