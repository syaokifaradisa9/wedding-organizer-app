<?php

namespace App\Repositories\Eloquent;

use App\Models\Lead;
use App\Repositories\Contracts\LeadRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class LeadRepository implements LeadRepositoryInterface
{
    public function all(): Collection
    {
        return Lead::all();
    }

    public function create(array $data): Lead
    {
        return Lead::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Lead::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Lead::destroy($id);
    }

    public function findByStatus(string $status): Collection
    {
        return Lead::where('status', $status)->get();
    }
}
