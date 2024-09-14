<?php

use App\Models\User;

use function Pest\Laravel\get;

uses(Tests\TestCase::class);

test('can see mobiles page', function() {
    $user = User::factory()->create();
    $this->actingAs($user);

    get(route('mobiles.index'))->assertOk();
});