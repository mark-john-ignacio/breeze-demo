<?php

use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

uses(Tests\TestCase::class);

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

test('can see mobiles create page', function() {
    get(route('mobiles.create'))
    ->assertOk();
});

test('name is required for creating a mobiles', function() {
   post(route('mobiles.store'))
   ->assertSessionHasErrors('name');
});

test('Can create a mobile', function() {
   post(route('mobiles.store'), ['name' => fake()->name])
   ->assertSessionHasNoErrors()
   ->assertRedirect(route('mobiles.index'));
});
