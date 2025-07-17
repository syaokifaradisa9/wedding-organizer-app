<?php

namespace App\Repositories\Contracts;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

interface EventRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?Event;
    public function create(array $data): Event;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function findByClient(int $clientId): Collection;
    public function findByPlanner(int $plannerId): Collection;
    public function addVendor(int $eventId, int $vendorId, array $details): void;
    public function updateVendor(int $eventId, int $vendorId, array $details): bool;
    public function removeVendor(int $eventId, int $vendorId): int;
}
