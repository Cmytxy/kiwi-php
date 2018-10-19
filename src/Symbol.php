<?php

namespace Ctefan\Kiwi;

class Symbol
{
    public const INVALID = 0;
    public const EXTERNAL = 1;
    public const SLACK = 2;
    public const ERROR = 3;
    public const DUMMY = 4;
    
    /**
     * @var int
     */
    protected $type;
    
    public function __construct()
    {
        $this->type = self::INVALID;
    }
    
    public function getType(): int
    {
        return $this->type;
    }
    
    public function setType(int $type): void
    {
        $this->type = $type;
    }
}