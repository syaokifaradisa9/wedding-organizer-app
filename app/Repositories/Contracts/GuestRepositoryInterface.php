<?php

namespace App\Repositories\Contracts;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Collection;

interface GuestRepositoryInterface
{
    public function findByEvent(int $eventId): Collection;
    public function create(array $data): Guest;
    public function createMany(array $data): bool;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
