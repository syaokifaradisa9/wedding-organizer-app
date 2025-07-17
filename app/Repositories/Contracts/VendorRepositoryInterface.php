<?php

namespace App\Repositories\Contracts;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Collection;

interface VendorRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?Vendor;
    public function create(array $data): Vendor;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function findByCategory(string $category): Collection;
    public function search(string $query): Collection;
}
