<?php

namespace App\Repositories\Eloquent;

use App\Models\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;

use Illuminate\Database\Eloquent\Collection;

class RoleRepository implements RoleRepositoryInterface
{
    public function all(): Collection
    {
        return Role::all();
    }

    public function find(int $id): ?Role
    {
        return Role::find($id);
    }

    public function create(array $data): Role
    {
        return Role::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Role::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Role::destroy($id);
    }

    public function findByName(string $name): ?Role
    {
        return Role::where('name', $name)->first();
    }
}
