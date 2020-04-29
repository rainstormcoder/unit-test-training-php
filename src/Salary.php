<?php
/** @author Alexandra Arnoux */
/** @date 29/04/2020 */
/** @class Salary Salary.php */

class Salary
{ /** Cette fonction permet de calculer le salaire net */
    static public function calculNetSalary($grossMonthlySalary)
    {
        return ($grossMonthlySalary * 55) / 100; /*** @param[in] salairebrut */
    }
}