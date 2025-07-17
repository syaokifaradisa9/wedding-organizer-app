<?php

namespace App\Repositories\Contracts;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Collection;

interface InvoiceRepositoryInterface
{
    public function findByEvent(int $eventId): Collection;
    public function create(array $data): Invoice;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function findByStatus(string $status): Collection;
}
