<?php

namespace App\Repositories\Interfaces;

interface LinkRepositoryInterface
{
    /**
     * Get's a links paginate
     *
     * @param int
     */
    public function paginate($page = 10);

    /**
     * Store a link.
     *
     * @param string $link
     * @param string $shortLink
     */
    public function store($link, $shortLink);

    /**
     * Get a link by short_link.
     *
     * @param string $shortLink
     */

    public function first($shortLink);
}
