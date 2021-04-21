<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FavoriteFolderSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FavoriteFolderSaveData
 * @subpackage Structs
 */
class FavoriteFolderSaveData extends AbstractStructBase
{
    /**
     * The Left
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Left = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ParentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentID = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The WorkplaceID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $WorkplaceID = null;
    /**
     * Constructor method for FavoriteFolderSaveData
     * @uses FavoriteFolderSaveData::setLeft()
     * @uses FavoriteFolderSaveData::setName()
     * @uses FavoriteFolderSaveData::setParentID()
     * @uses FavoriteFolderSaveData::setUserID()
     * @uses FavoriteFolderSaveData::setWorkplaceID()
     * @param int $left
     * @param string $name
     * @param string $parentID
     * @param string $userID
     * @param string $workplaceID
     */
    public function __construct(?int $left = null, ?string $name = null, ?string $parentID = null, ?string $userID = null, ?string $workplaceID = null)
    {
        $this
            ->setLeft($left)
            ->setName($name)
            ->setParentID($parentID)
            ->setUserID($userID)
            ->setWorkplaceID($workplaceID);
    }
    /**
     * Get Left value
     * @return int|null
     */
    public function getLeft(): ?int
    {
        return $this->Left;
    }
    /**
     * Set Left value
     * @param int $left
     * @return \StructType\FavoriteFolderSaveData
     */
    public function setLeft(?int $left = null): self
    {
        // validation for constraint: int
        if (!is_null($left) && !(is_int($left) || ctype_digit($left))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($left, true), gettype($left)), __LINE__);
        }
        $this->Left = $left;
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\FavoriteFolderSaveData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get ParentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentID(): ?string
    {
        return isset($this->ParentID) ? $this->ParentID : null;
    }
    /**
     * Set ParentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentID
     * @return \StructType\FavoriteFolderSaveData
     */
    public function setParentID(?string $parentID = null): self
    {
        // validation for constraint: string
        if (!is_null($parentID) && !is_string($parentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentID, true), gettype($parentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentID, true)), __LINE__);
        }
        if (is_null($parentID) || (is_array($parentID) && empty($parentID))) {
            unset($this->ParentID);
        } else {
            $this->ParentID = $parentID;
        }
        
        return $this;
    }
    /**
     * Get UserID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return isset($this->UserID) ? $this->UserID : null;
    }
    /**
     * Set UserID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userID
     * @return \StructType\FavoriteFolderSaveData
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userID, true)), __LINE__);
        }
        if (is_null($userID) || (is_array($userID) && empty($userID))) {
            unset($this->UserID);
        } else {
            $this->UserID = $userID;
        }
        
        return $this;
    }
    /**
     * Get WorkplaceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkplaceID(): ?string
    {
        return isset($this->WorkplaceID) ? $this->WorkplaceID : null;
    }
    /**
     * Set WorkplaceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workplaceID
     * @return \StructType\FavoriteFolderSaveData
     */
    public function setWorkplaceID(?string $workplaceID = null): self
    {
        // validation for constraint: string
        if (!is_null($workplaceID) && !is_string($workplaceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplaceID, true), gettype($workplaceID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workplaceID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workplaceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workplaceID, true)), __LINE__);
        }
        if (is_null($workplaceID) || (is_array($workplaceID) && empty($workplaceID))) {
            unset($this->WorkplaceID);
        } else {
            $this->WorkplaceID = $workplaceID;
        }
        
        return $this;
    }
}
