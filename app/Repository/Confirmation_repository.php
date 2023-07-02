<?php

namespace App\Repository;

use App\Domain\Confirmation_domain;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class Confirmation_repository
{
    // create
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


    // read
    public function getByProductCodeWithLimit(string $productCode, int $page): object
    {
        $confirmation = DB::table('confirmation_of_attendances')
            ->where('product_code', $productCode)
            ->orderBy('created_at')
            ->paginate(
                $perPage = 10,
                ['product_code', 'name', 'confirmation', 'message', 'created_at'],
                $pageName = 'page',
                $page
            );

        return $confirmation;
    }


    public function getByProductCode(string $productCode): object
    {
        return DB::table('confirmation_of_attendances')
            ->where('product_code', $productCode)
            ->orderByDesc('created_at')
            ->get();
    }
}
