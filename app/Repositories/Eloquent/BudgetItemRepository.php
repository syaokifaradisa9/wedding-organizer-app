<?php

namespace App\Repositories\Eloquent;

use App\Models\BudgetItem;
use App\Repositories\Contracts\BudgetItemRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class BudgetItemRepository implements BudgetItemRepositoryInterface
{
    public function findByEvent(int $eventId): Collection
    {
        return BudgetItem::where('event_id', $eventId)->get();
    }

    public function create(array $data): BudgetItem
    {
        return BudgetItem::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return BudgetItem::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return BudgetItem::destroy($id);
    }

    public function getSummary(int $eventId): array
    {
        $summary = BudgetItem::where('event_id', $eventId)
            ->select(
                DB::raw('SUM(estimated_budget) as total_estimated'),
                DB::raw('SUM(final_price) as total_final'),
                DB::raw('SUM(amount_paid) as total_paid')
            )
            ->first();

        $totalFinal = $summary->total_final ?? 0;
        $totalPaid = $summary->total_paid ?? 0;

        return [
            'total_estimated' => $summary->total_estimated ?? 0,
            'total_final' => $totalFinal,
            'total_paid' => $totalPaid,
            'remaining' => $totalFinal - $totalPaid,
        ];
    }
}
