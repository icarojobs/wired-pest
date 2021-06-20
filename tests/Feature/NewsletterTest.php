<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Str;
use App\Http\Livewire\Components\Newsletter;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    public function test_checks_if_base_url_is_working()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_checks_if_newsletter_component_is_present()
    {
        $response = $this->get('/');

        $response->assertSeeLivewire('components.newsletter');
    }

    public function test_checks_if_email_field_is_required()
    {
        Livewire::test(Newsletter::class)
            ->call('store')
            ->assertHasErrors(['email' => ['required']]);
    }

    public function test_checks_if_email_field_is_not_a_email_type()
    {
        Livewire::test(Newsletter::class)
            ->set('email', 'test')
            ->call('store')
            ->assertHasErrors(['email' => ['email']]);
    }

    public function test_checks_if_store_an_email_on_database()
    {
        $email = Str::lower(Str::random(5)) . '@test.com';

        Livewire::test(Newsletter::class)
            ->set('email', $email)
            ->call('store');

        $this->assertDatabaseHas('newsletters', [
            'email' => $email,
        ]);
    }
}
