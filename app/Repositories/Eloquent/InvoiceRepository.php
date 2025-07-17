<?php

namespace App\Repositories\Eloquent;

use App\Models\Invoice;
use App\Repositories\Contracts\InvoiceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    public function findByEvent(int $eventId): Collection
    {
        return Invoice::where('event_id', $eventId)->get();
    }

    public function create(array $data): Invoice
    {
        return Invoice::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Invoice::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Invoice::destroy($id);
    }

    public function findByStatus(string $status): Collection
    {
        return Invoice::where('status', $status)->get();
    }
}
