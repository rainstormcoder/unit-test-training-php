<?php
/** \author Alexandra Arnoux */
/** \date 29/04/2020 */
use PHPUnit\Framework\TestCase;

/** \class EmployeeTest EmployeeTest.php */
class EmployeeTest extends TestCase
{
    /** \fn Cette fonction permet de tester la fonction recuperer le nom et prénom*/
    public function testGetFullName()
    {
        $emp = new Employee('test', 'test', 'tes@mail.com');
        $this->assertEquals('test test', $emp->getFullName());
    }
     /** \fn Cette fonction permet de tester la fonction de recuperation du salaire net*/
    public function testGetNetSalary()
    {
        $emp = new Employee('test', 'test', 'tes@mail.com');
        $emp->setGrossMonthlySalary(1000);
        $this->assertEquals(550, $emp->getNetSalary());
    }
}