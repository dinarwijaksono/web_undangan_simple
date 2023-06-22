<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ViewsPage_repository
{
    // create
    public function create(string $pageCode, string $userAgent): void
    {
        DB::table('views_pages')
            ->insert([
                'page_code' => $pageCode,
                'user_agent' => $userAgent,
                'created_at' => round(microtime(true) * 1000)
            ]);
    }
}
