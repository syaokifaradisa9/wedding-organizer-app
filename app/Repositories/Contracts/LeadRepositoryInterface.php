<?php

namespace App\Repositories\Contracts;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Collection;

interface LeadRepositoryInterface
{
    public function all(): Collection;
    public function create(array $data): Lead;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function findByStatus(string $status): Collection;
}
