<?php

use App\Models\User;

use function Pest\Laravel\postJson;

uses(Tests\TestCase::class);

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

test('name is required for creating a mobile', function() {
   postJson(route('api.v1.mobiles.store'))
   ->assertUnprocessable()
   ->assertJsonValidationErrors('name');
});

test('Can create a mobiles', function() {
   postJson(route('api.v1.mobiles.store'), ['name' => fake()->name])
   ->assertJsonMissingValidationErrors()
   ->assertCreated();
});
