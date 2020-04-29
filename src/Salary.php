<?php


class Salary
{
    static public function calculNetSalary($grossMonthlySalary)
    {
        return ($grossMonthlySalary * 55) / 100;
    }
}