<?php

namespace App\Http\Livewire;

use App\Service\Confirmation_service;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class ShowListSaying1 extends Component
{
    public $productCode;

    public $listSaying;

    public function booted()
    {
        $confirmationService = App::make(Confirmation_service::class);
        $this->listSaying = $confirmationService->getByProductCode($this->productCode);
    }

    public function render()
    {
        return view("livewire.show-list-saying1");
    }
}
