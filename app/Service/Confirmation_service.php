<?php

namespace App\Service;

use App\Domain\Confirmation_domain;
use App\Repository\Confirmation_repository;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class Confirmation_service
{
    protected $confirmationRepository;

    public function __construct(Confirmation_repository $confirmationRepository)
    {
        $this->confirmationRepository = $confirmationRepository;
    }


    // create
    public function create(Request $request): void
    {
        $confirmation = new Confirmation_domain();
        $confirmation->productCode = $request->productCode;
        $confirmation->name = $request->name;
        $confirmation->confirmation = $request->confirmation;
        $confirmation->message = $request->message;

        $this->confirmationRepository->create($confirmation);
    }

    // read
    public function getByProductCodeWithLimit(string $productCode, int $page = 1): object
    {
        $listConfirmation = collect($this->confirmationRepository->getByProductCodeWithLimit($productCode, $page));

        return $listConfirmation;
    }
}
