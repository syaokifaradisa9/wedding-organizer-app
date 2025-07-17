<?php

namespace App\Repositories\Eloquent;

use App\Models\ActionLog;
use App\Repositories\Contracts\ActionLogRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ActionLogRepository implements ActionLogRepositoryInterface
{
    public function create(array $data): ActionLog
    {
        return ActionLog::create($data);
    }

    public function findByModel(string $modelType, int $modelId): Collection
    {
        return ActionLog::where('loggable_type', $modelType)
            ->where('loggable_id', $modelId)
            ->latest()
            ->get();
    }

    public function findByUser(int $userId): Collection
    {
        return ActionLog::where('user_id', $userId)
            ->latest()
            ->get();
    }
}
