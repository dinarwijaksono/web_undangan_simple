<?php

namespace App\Http\Livewire;

use App\Service\Confirmation_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class FormConfirmation extends Component
{
    public $productCode;

    public $name;
    public $confirmation;
    public $message;

    protected $rules = [
        'name' => 'required|max:20',
        'confirmation' => 'required',
        'message' => 'required'
    ];

    protected $confirmationService;

    public function booted()
    {
        $this->confirmationService = App::make(Confirmation_service::class);
    }

    public function storeSaying()
    {
        $this->validate();

        $request = new Request();
        $request['productCode'] = $this->productCode;
        $request['name'] = $this->name;
        $request['confirmation'] = $this->confirmation;
        $request['message'] = $this->message;

        $this->confirmationService->create($request);

        session()->flash('createSuccess', "Pesan berhasil di kirim.");

        $this->name = '';
        $this->confirmation = '';
        $this->message = '';

        $this->emit('showListSaying');
    }

    public function render()
    {
        return view('livewire.form-confirmation');
    }
}
