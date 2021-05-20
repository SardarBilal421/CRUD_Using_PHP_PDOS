<?php
class User{
    private $id,$name,$employee_code,$designation,$role,$age,$detail;
    public function __construct(){
        $this->detail='<tr><td> Employee Name : '.$this->name.' , Employee EmployeCode :    '.$this->employee_code .',
        Designation :  '.$this->designation. ', Role  :  '.$this->role . ', Age :  ' .$this->age .
        '</td>'.'<td><a href="./PDODelete.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
        '<td><a href="./PDOUpdate.php?id='.$this->id.'"> Update </a></td></tr>';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @return mixed
     */
    public function getEmployeeCode()
    {
        return $this->employee_code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @param mixed $employee_code
     */
    public function setEmployeeCode($employee_code)
    {
        $this->employee_code = $employee_code;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

}
