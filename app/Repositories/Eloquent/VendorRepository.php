<?php

namespace App\Repositories\Eloquent;

use App\Models\Vendor;
use App\Repositories\Contracts\VendorRepositoryInterface;

use Illuminate\Database\Eloquent\Collection;

class VendorRepository implements VendorRepositoryInterface
{
    public function all(): Collection
    {
        return Vendor::all();
    }

    public function find(int $id): ?Vendor
    {
        return Vendor::find($id);
    }

    public function create(array $data): Vendor
    {
        return Vendor::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Vendor::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Vendor::destroy($id);
    }

    public function findByCategory(string $category): Collection
    {
        return Vendor::where('category', $category)->get();
    }

    public function search(string $query): Collection
    {
        return Vendor::where('name', 'like', "%{$query}%")->get();
    }
}
