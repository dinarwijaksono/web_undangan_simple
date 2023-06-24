<?php

namespace App\Repository;

use App\Domain\Confirmation_domain;
use Illuminate\Support\Facades\DB;

class Confirmation_repository
{
    public function create(Confirmation_domain $confirmationDomain)
    {
        DB::table('confirmation_of_attendances')
            ->insert([
                'product_code' => $confirmationDomain->productCode,
                'name' => $confirmationDomain->name,
                'confirmation' => $confirmationDomain->confirmation,
                'message' => $confirmationDomain->message,
                'created_at' => round(microtime(true) * 1000)
            ]);
    }
}
