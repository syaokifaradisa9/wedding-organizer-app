<?php

namespace App\Repositories\Contracts;

use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

interface RoleRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?Role;
    public function create(array $data): Role;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function findByName(string $name): ?Role;
}
