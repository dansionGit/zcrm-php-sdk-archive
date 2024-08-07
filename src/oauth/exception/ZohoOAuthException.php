<?php
namespace zcrmsdk\oauth\exception;

class ZohoOAuthException extends \Exception
{
    
    protected $message = 'Unknown exception';
    
    public function __construct($message = null, $code = 0)
    {
        if (! $message) {
            throw new $this('Unknown ' . get_class($this));
        }
        parent::__construct($message, $code);
    }
    
    public function __toString()
    {
        return get_class($this) . " Caused by:'{$this->message}' in {$this->file}({$this->line})\n" . "{$this->getTraceAsString()}";
    }
}
