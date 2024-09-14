<?php

use App\Models\User;
use Modules\Mobiles\Models\Mobile;

use function Pest\Laravel\delete;

uses(Tests\TestCase::class);

test('Can delete a mobile', function() {
    $user = User::factory()->create();
    $this->actingAs($user);

    $mobile = Mobile::factory()->create();

    $this->assertDatabaseCount(Mobile::class, 1);

    delete(route('mobiles.destroy', $mobile))
    ->assertSessionHasNoErrors()
    ->assertRedirect(route('mobiles.index'));

    $this->assertDatabaseCount(Mobile::class, 0);
});
