<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class TimeInterval extends Google_Model
{
    public $kind;

    protected $end;
    protected $endType = DateTime::class;
    protected $endDataType = '';

    protected $start;
    protected $startType = DateTime::class;
    protected $startDataType = '';

    public function setEnd(DateTime $end)
    {
        $this->end = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setStart(DateTime $start)
    {
        $this->start = $start;
    }

    public function getStart()
    {
        return $this->start;
    }
}