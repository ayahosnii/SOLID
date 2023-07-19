<?php

namespace SOLID\LSP;

class LSPViolation
{
    public function calculateSalaryOfEmployee(LSPViolationType $type, int $tax)
    {
        return $type->calculateSalary($tax);
    }

}