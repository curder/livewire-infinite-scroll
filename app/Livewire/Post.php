<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Post extends Component
{
    public Collection $ids;

    public \Illuminate\Database\Eloquent\Collection $posts;

    public function mount(): void
    {
        $order = Str::of('FIELD (id, ')
            ->append($this->ids->implode(','))
            ->append(')');

        $this->posts = \App\Models\Post::query()
            ->whereIn('id', $this->ids)
            ->orderByRaw($order)
            ->get();
    }

    public function render(): View
    {
        return view('livewire.post');
    }
}
