# Unit test and TDD training

This small project will help teach basics of unit testing and TDD to junior developers.

### Prerequisites

You only need 

```
composer
```

### Installing

Step by step

```
1. Clone repository
2. run composer install
3. Create your own branch from exercice branch 
4. You are ready to go !
```

## Running the tests

This is how you run the tests 
```
./vendor/bin/phpunit tests
``` 

### Instructions of the project

```
1. Run the tests once, everything should be passing.

2. Create a test that uses receive full name of Employee, test fails, 
then create a getFullName() function in Employee that will make the test pass.

3. Add a grossMonthlySalary property to Employee, create a test for its getter in EmployeeTest,
 then generate it in Employee class.

4. Now we want to know the net salary of the employee, 
add a test that will get the net salary of the employee ( 55% of the gross salary ).

5. Implement a simple getNetMonthlySalary in Employee, that will make the test pass.

6. Externalize logic from the calculation in Salary class, 
which will take care of the calculation. 
getNetMonthlySalary should just use a static function from Salary class,
 BUT the test should still run after the externalization is done.

All tests should pass, feel free to add some that you find interesting, 
you have all the freedom to improve the content.
```

## Authors

* **Timothy Khoury** - *Initial work in progress* - [timothyk0908](https://github.com/timothyk0908)

## Acknowledgments

* Thanks for PHPUnit Getting Started which was the base of the project ( https://phpunit.de/getting-started/phpunit-7.html )
