<?php

use function Livewire\Volt\{layout, state};

layout('base::components.layouts.app');

state('name', 'John Doe');

?>

<div class="text-white">
    <input type="text" wire:model.live="name" class="text-black">
    contact for {{ $name }}
</div>
