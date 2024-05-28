<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * @property-read LengthAwarePaginator $paginator
 */
class Posts extends Component
{
    use WithPagination;

    public int $page = 1;

    public Collection $chunks;

    public function mount(): void
    {
        $this->chunks = Post::query()->latest()->pluck('id')->chunk(10);
    }

    public function hasMorePages(): bool
    {
        return $this->page < $this->chunks->count();
    }

    public function loadMore(): void
    {
        if (! $this->hasMorePages()) {
            return;
        }

        $this->page = $this->page + 1;
    }

    public function render(): View
    {
        return view('livewire.posts');
    }
}
