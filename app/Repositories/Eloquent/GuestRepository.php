<?php

namespace App\Repositories\Eloquent;

use App\Models\Guest;
use App\Repositories\Contracts\GuestRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GuestRepository implements GuestRepositoryInterface
{
    public function findByEvent(int $eventId): Collection
    {
        return Guest::where('event_id', $eventId)->get();
    }

    public function create(array $data): Guest
    {
        return Guest::create($data);
    }

    public function createMany(array $data): bool
    {
        return Guest::insert($data);
    }

    public function update(int $id, array $data): bool
    {
        return Guest::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Guest::destroy($id);
    }
}
