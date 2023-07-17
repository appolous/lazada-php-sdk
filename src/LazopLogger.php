<?php

namespace Lazada;

use Psr\Log\LoggerInterface;

class LazopLogger
{
    protected $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

	public function log($logData)
	{
        if ($this->logger) {
		    return $this->logger->error($logData);
        }
	}
}
