<?php

namespace App\Repositories;

use App\Models\ApiRecord;
use Illuminate\Database\Eloquent\Collection;

class ApiRecordRepository
{
    public function getLatestRecords(): Collection
    {
        return ApiRecord::latest()->get();
    }
}