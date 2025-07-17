<?php

namespace App\Repositories\Eloquent;

use App\Models\Event;
use App\Repositories\Contracts\EventRepositoryInterface;

use Illuminate\Database\Eloquent\Collection;

class EventRepository implements EventRepositoryInterface
{
    public function all(): Collection
    {
        return Event::all();
    }

    public function find(int $id): ?Event
    {
        return Event::find($id);
    }

    public function create(array $data): Event
    {
        return Event::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Event::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Event::destroy($id);
    }

    public function findByClient(int $clientId): Collection
    {
        return Event::where('client_id', $clientId)->get();
    }

    public function findByPlanner(int $plannerId): Collection
    {
        return Event::where('lead_planner_id', $plannerId)->get();
    }

    public function addVendor(int $eventId, int $vendorId, array $details): void
    {
        $event = Event::find($eventId);
        $event->vendors()->attach($vendorId, $details);
    }

    public function updateVendor(int $eventId, int $vendorId, array $details): bool
    {
        $event = Event::find($eventId);
        return $event->vendors()->updateExistingPivot($vendorId, $details);
    }

    public function removeVendor(int $eventId, int $vendorId): int
    {
        $event = Event::find($eventId);
        return $event->vendors()->detach($vendorId);
    }
}
