<?php

namespace Inani\Larapoll;

use Illuminate\Http\Request;
use Inani\Larapoll\Traits\Voter;

class Guest
{
    use Voter;

    public $user_id;

    public function __construct(Request $request)
    {
        $this->user_id = $request->ip();
    }
}
