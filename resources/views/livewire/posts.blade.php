<div class="space-y-2">
    @for($chunk = 0; $chunk < $page; $chunk++)
        <livewire:post :ids="$chunks[$chunk]" :key="$chunk"/>
    @endfor

    @if($this->hasMorePages())
        <div x-intersect="$wire.loadMore"></div>
    @endif

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
