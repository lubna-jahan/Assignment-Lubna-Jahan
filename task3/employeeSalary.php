<?php
class Employee
{
    private $name;
    private $gender;
    private $salary;

    public function __construct(String $name, String $gender, float $salary)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setName(String $name)
    {
        $this->name = $name;
    }
    public function setGender(String $gender)
    {
        $this->gender = $gender;
    }
    public function setSalary(float $salary)
    {
        $this->salary = $salary;
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new InvalidArgumentException('Salary cannot be negative.');
        }
    }
}

$employee = new Employee('Lubna Jahan', 'Female', 20000);

echo "Name: " . $employee->getName() . "<br>";
echo "Gender: " . $employee->getGender() . "<br>";
echo "Salary: " . $employee->getSalary() . "<br>";
