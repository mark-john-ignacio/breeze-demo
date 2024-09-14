<?php

use App\Models\User;
use Modules\Mobiles\Models\Mobile;

use function Pest\Laravel\get;
use function Pest\Laravel\put;

uses(Tests\TestCase::class);

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

test('Can see mobiles edit page', function() {
    $mobile = Mobile::factory()->create();

    get(route('mobiles.edit', $mobile))
    ->assertOk();
});

test('name is required for editing a mobile', function() {
    $mobile = Mobile::factory()->create();

    put(route('mobiles.update', $mobile))
    ->assertSessionHasErrors();
});

test('Can update a mobile', function() {
    $mobile = Mobile::factory()->create();

    $name = fake()->name;

    put(route('mobiles.update', $mobile), ['name' => $name])
    ->assertSessionHasNoErrors()
    ->assertRedirect(route('mobiles.index'));

    $this->assertDatabaseHas(Mobile::class, ['name' => $name]);
});
