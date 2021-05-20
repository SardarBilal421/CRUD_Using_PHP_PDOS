<?php
class StaffInfo{
    private $id,$fName,$lName,$gender,$eyeColour,$phone,$Descriptions,$Address,$Detail;
    public function __construct(){
        $this->Detail='<tr><td> First Name : '.$this->fName.' , Last Name :    '.$this->lName .',
        Gender :  '.$this->gender. ', EyeColour  :  '.$this->eyeColour . ', Phone :  ' .$this->phone .', Description : '.$this->Descriptions.', Address : '.$this->Address.
            '</td>'.'<td><a href="./PDOStaffDeletion.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
            '<td><a href="./PDOStaffUpdateInfo.php?id='.$this->id.'"> Update </a></td></tr>';

    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }

    /**
     * @return mixed
     */
    public function getEyeColour()
    {
        return $this->eyeColour;
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @param mixed $Descriptions
     */
    public function setDescriptions($Descriptions)
    {
        $this->Descriptions = $Descriptions;
    }

    /**
     * @param string $Detail
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
    }

    /**
     * @param mixed $eyeColour
     */
    public function setEyeColour($eyeColour)
    {
        $this->eyeColour = $eyeColour;
    }

    /**
     * @param mixed $fName
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $lName
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    }


}

