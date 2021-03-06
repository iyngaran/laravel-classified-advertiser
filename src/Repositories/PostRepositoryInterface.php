<?php


namespace Iyngaran\Advertiser\Repositories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use Iyngaran\Advertiser\Models\Post;

interface PostRepositoryInterface
{
    public function find(int $id): Post;

    public function findBySlug(string $slug): Post;

    public function search(FormRequest $request): ?LengthAwarePaginator;
}
