<?php

namespace SOLID\LSP;

class EncryptSubType extends Encrypt
{

    public function encryptString()
    {
        return md5($this->getString());
    }
}