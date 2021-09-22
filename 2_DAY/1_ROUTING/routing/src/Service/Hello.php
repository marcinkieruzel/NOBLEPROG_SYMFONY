<?php

namespace App\Service;

use Monolog\Logger;
use Psr\Log\LoggerInterface;

class Hello
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function hello() {
        $this->logger->alert("Witam się");
        return "Cześć";
    }
}