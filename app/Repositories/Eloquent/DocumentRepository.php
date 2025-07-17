<?php

namespace App\Repositories\Eloquent;

use App\Models\Document;
use App\Repositories\Contracts\DocumentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DocumentRepository implements DocumentRepositoryInterface
{
    public function findByModel(string $modelType, int $modelId): Collection
    {
        return Document::where('documentable_type', $modelType)
            ->where('documentable_id', $modelId)
            ->get();
    }

    public function create(array $data): Document
    {
        return Document::create($data);
    }

    public function delete(int $id): bool
    {
        return Document::destroy($id);
    }
}
