<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkStore;
use App\Models\Link;
use App\Services\LinkService;
use App\Repositories\LinkRepository;

class LinkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $linkRepository;
    private $linkService;

    public function __construct(LinkRepository $linkRepository, LinkService $linkService)
    {
        $this->linkRepository = $linkRepository;
        $this->linkService = $linkService;
    }
    /**
     * Get all links paginate
     *
     * @return LengthAwarePaginator
     */
    public function index()
    {
        $links = $this->linkRepository->paginate();
        
        return view('home')->withLinks($links);
    }
    /**
     * Generate and store short_link
     *
     * @param LinkStore $request
     * @return void
     */
    public function store(LinkStore $request)
    {
        $shortLink = $this->linkService->generateShortLink();
        $link = $this->linkRepository->store($request->link, $shortLink);
        
        return back()->with('link', route('links.short', $link->short_link));
    }
    /**
     * Get shorten link
     * @param $short_link
     * @return void
     */

    public function shortenLink($short_link)
    {
        $find = $this->linkRepository->first($short_link);
     
        return redirect($find->link);
    }
}
