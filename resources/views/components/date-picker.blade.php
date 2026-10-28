<?php
/**
 * Copyright ©Uniwizard All rights reserved.
 * See LICENSE_UNIWIZARD for license details.
 * @author: Uniwizard Wojciech Niewiadomski
 */
use Livewire\Attributes\Modelable;
use Livewire\Component;

new class extends Component {
    #[Modelable]
    public $date = '';
};
?>

<div>
    <input {{ $attributes->merge([
            'class' => 'border rounded px-3 py-2 mt-1 block w-full',
            'type' => 'date',
            'wire:model' => 'date',
        ]) }} \>
</div>




