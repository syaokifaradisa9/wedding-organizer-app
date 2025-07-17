<?php

namespace App\Repositories\Contracts;

use App\Models\ChecklistItem;
use Illuminate\Database\Eloquent\Collection;

interface ChecklistItemRepositoryInterface
{
    public function findByEvent(int $eventId): Collection;
    public function create(array $data): ChecklistItem;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function findByAssignee(int $userId): Collection;
}
