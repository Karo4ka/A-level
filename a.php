<?php
class Students {
    private $Alex,$Pavel, $Karina;
pritected function __construct($name, $lastname, $surname, $age)
{
    $this->fullName = $name;
    $this->fullName = $lastname;
    $this->fullName = $surname;
    $this->fullName = $age;
}
    public function getName()
    {
        return $this->Name;
    }

    public function getLastname()
    {
        return $this->Lastname;
    }

    public function setName($name)
    {
        if (gettype($name) === 'string') {
            $this->fullName = $name;
        }
    }

    public function setLastname(array $lastname)
    {
        $this->Lastname = $lastname;
    }

}