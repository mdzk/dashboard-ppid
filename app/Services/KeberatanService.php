<?php

namespace App\Services;

use App\Models\Keberatan;

class KeberatanService
{
    protected $keberatan;
    public function __construct(Keberatan $keberatan)
    {
        $this->keberatan = $keberatan;
    }

    public function Query()
    {
        return $this->keberatan->query();
    }
}
