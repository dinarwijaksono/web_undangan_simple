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


    // get
    public function getPageByCode(string $pageCode): object
    {
        return DB::table('views_pages')
            ->where('page_code', $pageCode)
            ->select('page_code', 'user_agent', 'created_at')
            ->orderByDesc('created_at')
            ->get();
    }

    public function getViewsCount(): object
    {
        return DB::table('views_pages')
            ->select(DB::raw('count(*) as total, page_code'))
            ->groupBy('page_code')
            ->orderByDesc('total')
            ->get();
    }
}
