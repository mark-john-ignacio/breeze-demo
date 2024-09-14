<?php

use App\Models\User;
use Modules\Mobiles\Models\Mobile;

use function Pest\Laravel\putJson;

uses(Tests\TestCase::class);

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

test('name is required for editing a mobile', function() {
    $mobile = Mobile::factory()->create();

    putJson(route('api.v1.mobiles.update', $mobile))
    ->assertJsonValidationErrors('name');
});

test('Can update a mobile', function() {
    $mobile = Mobile::factory()->create();

    $name = fake()->name;

    putJson(route('api.v1.mobiles.update', $mobile), ['name' => $name])
    ->assertJsonMissingValidationErrors()
    ->assertOk();

    $this->assertDatabaseHas(Mobile::class, ['name' => $name]);
});
