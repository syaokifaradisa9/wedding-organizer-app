<?php

namespace App\Repositories\Contracts;

use App\Models\Document;
use Illuminate\Database\Eloquent\Collection;

interface DocumentRepositoryInterface
{
    public function findByModel(string $modelType, int $modelId): Collection;
    public function create(array $data): Document;
    public function delete(int $id): bool;
}
