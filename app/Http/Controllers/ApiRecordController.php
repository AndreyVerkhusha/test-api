<?php

namespace App\Http\Controllers;

use App\Repositories\ApiRecordRepository;
use Illuminate\Http\JsonResponse;

class ApiRecordController extends Controller
{
    public function __construct(
        protected ApiRecordRepository $apiRecordRepository
    ) {
    }

    public function index(): JsonResponse
    {
        return response()->json(
            $this->apiRecordRepository->getLatestRecords()
        );
    }
}
