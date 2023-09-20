<?php

class customException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . " {$this->code}  --  {$this->message}";
    }
}

try {
    $num = 0;
    if (!is_numeric($num)) {
        throw new customException("Invalid Number.");
    }
    if ($num === 0) {
        throw new Exception(" $num  must not be zero . ");
    }
    $result = 100 / $num;
    return $result;
} catch (customException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
