<?php

namespace SOLID\LSP;

class Encrypt
{
    /**
     * @var string;
     */
    protected $string;

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString(string $string): void
    {
        $this->string = $string;
    }


    public function encryptString()
    {
        return md5($this->getString());
    }
}