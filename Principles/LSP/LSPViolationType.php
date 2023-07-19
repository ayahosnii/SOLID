<?php

namespace SOLID\LSP;

class LSPViolationType
{
    /**
    * @var int
     */
    protected $salary;

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }
    public function calculateSalary(int $tax)
    {
        if ($tax < 10) {
            echo 'Sorry the tax must be more than 10%';
        }
        return $this->getSalary() - ($this->getSalary() * $tax / 100);
    }
}