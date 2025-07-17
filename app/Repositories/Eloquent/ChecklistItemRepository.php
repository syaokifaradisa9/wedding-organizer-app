<?php

namespace App\Repositories\Eloquent;

use App\Models\ChecklistItem;
use App\Repositories\Contracts\ChecklistItemRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ChecklistItemRepository implements ChecklistItemRepositoryInterface
{
    public function findByEvent(int $eventId): Collection
    {
        return ChecklistItem::where('event_id', $eventId)->get();
    }

    public function create(array $data): ChecklistItem
    {
        return ChecklistItem::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return ChecklistItem::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return ChecklistItem::destroy($id);
    }

    public function findByAssignee(int $userId): Collection
    {
        return ChecklistItem::where('assignee_id', $userId)->get();
    }
}
