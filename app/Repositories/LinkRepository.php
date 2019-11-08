<?php

namespace App\Repositories;

use App\Models\Link;
use App\Repositories\Interfaces\LinkRepositoryInterface;

class LinkRepository implements LinkRepositoryInterface
{
    protected $model;

    public function __construct(Link $link)
    {
        $this->model = $link;
    }
    /**
    * Get's links paginate
    *
    * @param int
    * @return LengthAwarePaginator
    */
    public function paginate($page = 10)
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate($page);
    }
    /**
    * Get's a link
    *
    * @param string $link
    * @param string $shortLink
    * @return collection
    */
    public function store($link, $shortLink)
    {
        return $this->model->firstOrCreate(
            ['link' => $link],
            ['short_link' => $shortLink]
        );
    }
    /**
    * Get's a link by short_link
    *
    * @param string $shortLink
    * @return collection
    */
    public function first($shortLink)
    {
        return $this->model->where('short_link', $shortLink)->firstOrFail();
    }
}
