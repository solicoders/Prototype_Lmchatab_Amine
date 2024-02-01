<?php

namespace App\Repositories\Page;

use App\Models\Page\Page;
use App\Repositories\BaseRepository;

class PageRepository extends BaseRepository
{


    public function __construct(Page $page)
    {
        parent::__construct($page);
    }




}
