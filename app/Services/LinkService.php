<?php

namespace App\Services;

use App\Models\Link;
use Illuminate\Support\Str;

/**
 * Class LinkService
 * @package App\Services
 */
class LinkService
{
    /**
     * @return string
     */
    public function generateShortLink()
    {
        do {
            $shortLink = Str::random(6);
            $alreadyExist =  Link::where('short_link', $shortLink)->exists();
        } while ($alreadyExist);

        return $shortLink;
    }
}
