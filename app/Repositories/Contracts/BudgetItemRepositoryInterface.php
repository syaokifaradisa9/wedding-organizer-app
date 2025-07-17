<?php

namespace App\Repositories\Contracts;

use App\Models\BudgetItem;
use Illuminate\Database\Eloquent\Collection;

interface BudgetItemRepositoryInterface
{
    public function findByEvent(int $eventId): Collection;
    public function create(array $data): BudgetItem;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function getSummary(int $eventId): array;
}
