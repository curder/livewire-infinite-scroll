<?php

use App\Livewire\Posts;
use Livewire\Livewire;

it('renders posts component successfully', function () {
    Livewire::test(Posts::class)
        ->assertViewIs('livewire.posts')
        ->assertOk();
});
