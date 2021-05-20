<?php
class SupplierInfo
{
    private $id,$asset_id,$supplier_Name,$description,$item,$detail;
    public function __construct(){
        $this->detail='<tr><td> AssetID : '.$this->asset_id.' , Supplier Name  :    '.$this->supplier_Name .',
        Designation :  '.$this->description . ', Item  :  '.$this->item .
            '</td>'.'<td><a href="./PDOSuppliesDeletion.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
            '<td><a href="./PDOSuppliersUpdation.php?id='.$this->id.'"> Update </a></td></tr>';

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @return mixed
     */
    public function getAssetId()
    {
        return $this->asset_id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return mixed
     */
    public function getSupplierName()
    {
        return $this->supplier_Name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @param mixed $AssetId
     */
    public function setAssetId($AssetId)
    {
        $this->asset_id = $AssetId;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->description = $Description;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * @param mixed $SupplierName
     */
    public function setSupplierName($SupplierName)
    {
        $this->supplier_Name = $SupplierName;
    }
}