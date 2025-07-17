<?php

namespace App\Repositories\Contracts;

use App\Models\ActionLog;
use Illuminate\Database\Eloquent\Collection;

interface ActionLogRepositoryInterface
{
    public function create(array $data): ActionLog;
    public function findByModel(string $modelType, int $modelId): Collection;
    public function findByUser(int $userId): Collection;
}
