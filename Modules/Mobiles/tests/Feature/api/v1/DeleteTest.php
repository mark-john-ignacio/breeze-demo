<?php

use App\Models\User;
use Modules\Mobiles\Models\Mobile;

use function Pest\Laravel\deleteJson;

uses(Tests\TestCase::class);

test('Can delete a mobile', function() {
    $user = User::factory()->create();
    $this->actingAs($user);

    $mobile = Mobile::factory()->create();

    $this->assertDatabaseCount(Mobile::class, 1);

    deleteJson(route('api.v1.mobiles.destroy', $mobile))
    ->assertJsonMissingValidationErrors()
    ->assertNoContent();

    $this->assertDatabaseCount(Mobile::class, 0);
});
