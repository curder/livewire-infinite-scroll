<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * @property-read LengthAwarePaginator $paginator
 */
class Posts extends Component
{
    use WithPagination;

    public int $page = 1;

    public Collection $posts;

    public function mount(): void
    {
        $this->posts = collect();

        $this->loadMore();
    }

    public function hasMorePages(): bool
    {
        return $this->paginator->hasMorePages();
    }

    public function loadMore(): void
    {

        $this->posts->push(
            ...$this->paginator->getCollection()
        );

        $this->page = $this->page + 1;

    }

    #[Computed]
    public function paginator(): LengthAwarePaginator
    {
        return Post::query()
            ->latest()
            ->paginate(perPage: 10, page: $this->page);
    }

    public function render(): View
    {
        return view('livewire.posts');
    }
}
