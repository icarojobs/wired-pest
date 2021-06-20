<?php

use App\Http\Livewire\Components\Newsletter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

uses(RefreshDatabase::class);

test('checks if base url is working')
    ->get('/')
    ->assertStatus(200);

test('checks if newsletter component is present')
    ->get('/')
    ->assertSeeLivewire('components.newsletter');

test('checks if email field is required')
    ->livewire(Newsletter::class)
    ->call('store')
    ->assertHasErrors(['email' => ['required']]);

test('checks if email field is not a email type')
    ->livewire(Newsletter::class)
    ->set('email', 'test')
    ->call('store')
    ->assertHasErrors(['email' => ['email']]);

test('checks if store an email on database', function($emails) {
    livewire(Newsletter::class)
        ->set('email', $emails)
        ->call('store');

    assertDatabaseHas('newsletters', [
        'email' => $emails,
    ]);
})->with('emails');
