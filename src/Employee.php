<?php

include "Salary.php";

class Employee
{
    private $firstName;
    private $lastName;
    private $email;
    private $grossMonthlySalary;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getGrossMonthlySalary()
    {
        return $this->grossMonthlySalary;
    }

    public function setGrossMonthlySalary($grossMonthlySalary)
    {
        $this->grossMonthlySalary = $grossMonthlySalary;
    }



    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getNetSalary()
    {
        return Salary::calculNetSalary($this->grossMonthlySalary);
    }

}