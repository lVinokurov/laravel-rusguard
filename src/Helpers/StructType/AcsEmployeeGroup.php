<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeGroup StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeGroup
 * @subpackage Structs
 */
class AcsEmployeeGroup extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The CreationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDateTime = null;
    /**
     * The EmployeeGroups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroup $EmployeeGroups = null;
    /**
     * The FavoriteName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FavoriteName = null;
    /**
     * The FavoritePath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FavoritePath = null;
    /**
     * The GroupCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupCode = null;
    /**
     * The GroupType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GroupType = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The IsGuestGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsGuestGroup = null;
    /**
     * The IsRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRemoved = null;
    /**
     * The ModificationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModificationDateTime = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for AcsEmployeeGroup
     * @uses AcsEmployeeGroup::setComment()
     * @uses AcsEmployeeGroup::setCreationDateTime()
     * @uses AcsEmployeeGroup::setEmployeeGroups()
     * @uses AcsEmployeeGroup::setFavoriteName()
     * @uses AcsEmployeeGroup::setFavoritePath()
     * @uses AcsEmployeeGroup::setGroupCode()
     * @uses AcsEmployeeGroup::setGroupType()
     * @uses AcsEmployeeGroup::setID()
     * @uses AcsEmployeeGroup::setIsGuestGroup()
     * @uses AcsEmployeeGroup::setIsRemoved()
     * @uses AcsEmployeeGroup::setModificationDateTime()
     * @uses AcsEmployeeGroup::setName()
     * @param string $comment
     * @param string $creationDateTime
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $employeeGroups
     * @param string $favoriteName
     * @param string $favoritePath
     * @param string $groupCode
     * @param string $groupType
     * @param string $iD
     * @param bool $isGuestGroup
     * @param bool $isRemoved
     * @param string $modificationDateTime
     * @param string $name
     */
    public function __construct(?string $comment = null, ?string $creationDateTime = null, ?\ArrayType\ArrayOfAcsEmployeeGroup $employeeGroups = null, ?string $favoriteName = null, ?string $favoritePath = null, ?string $groupCode = null, ?string $groupType = null, ?string $iD = null, ?bool $isGuestGroup = null, ?bool $isRemoved = null, ?string $modificationDateTime = null, ?string $name = null)
    {
        $this
            ->setComment($comment)
            ->setCreationDateTime($creationDateTime)
            ->setEmployeeGroups($employeeGroups)
            ->setFavoriteName($favoriteName)
            ->setFavoritePath($favoritePath)
            ->setGroupCode($groupCode)
            ->setGroupType($groupType)
            ->setID($iD)
            ->setIsGuestGroup($isGuestGroup)
            ->setIsRemoved($isRemoved)
            ->setModificationDateTime($modificationDateTime)
            ->setName($name);
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\AcsEmployeeGroup
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get CreationDateTime value
     * @return string|null
     */
    public function getCreationDateTime(): ?string
    {
        return $this->CreationDateTime;
    }
    /**
     * Set CreationDateTime value
     * @param string $creationDateTime
     * @return \StructType\AcsEmployeeGroup
     */
    public function setCreationDateTime(?string $creationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTime) && !is_string($creationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTime, true), gettype($creationDateTime)), __LINE__);
        }
        $this->CreationDateTime = $creationDateTime;
        
        return $this;
    }
    /**
     * Get EmployeeGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    public function getEmployeeGroups(): ?\ArrayType\ArrayOfAcsEmployeeGroup
    {
        return isset($this->EmployeeGroups) ? $this->EmployeeGroups : null;
    }
    /**
     * Set EmployeeGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $employeeGroups
     * @return \StructType\AcsEmployeeGroup
     */
    public function setEmployeeGroups(?\ArrayType\ArrayOfAcsEmployeeGroup $employeeGroups = null): self
    {
        if (is_null($employeeGroups) || (is_array($employeeGroups) && empty($employeeGroups))) {
            unset($this->EmployeeGroups);
        } else {
            $this->EmployeeGroups = $employeeGroups;
        }
        
        return $this;
    }
    /**
     * Get FavoriteName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFavoriteName(): ?string
    {
        return isset($this->FavoriteName) ? $this->FavoriteName : null;
    }
    /**
     * Set FavoriteName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $favoriteName
     * @return \StructType\AcsEmployeeGroup
     */
    public function setFavoriteName(?string $favoriteName = null): self
    {
        // validation for constraint: string
        if (!is_null($favoriteName) && !is_string($favoriteName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($favoriteName, true), gettype($favoriteName)), __LINE__);
        }
        if (is_null($favoriteName) || (is_array($favoriteName) && empty($favoriteName))) {
            unset($this->FavoriteName);
        } else {
            $this->FavoriteName = $favoriteName;
        }
        
        return $this;
    }
    /**
     * Get FavoritePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFavoritePath(): ?string
    {
        return isset($this->FavoritePath) ? $this->FavoritePath : null;
    }
    /**
     * Set FavoritePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $favoritePath
     * @return \StructType\AcsEmployeeGroup
     */
    public function setFavoritePath(?string $favoritePath = null): self
    {
        // validation for constraint: string
        if (!is_null($favoritePath) && !is_string($favoritePath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($favoritePath, true), gettype($favoritePath)), __LINE__);
        }
        if (is_null($favoritePath) || (is_array($favoritePath) && empty($favoritePath))) {
            unset($this->FavoritePath);
        } else {
            $this->FavoritePath = $favoritePath;
        }
        
        return $this;
    }
    /**
     * Get GroupCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupCode(): ?string
    {
        return isset($this->GroupCode) ? $this->GroupCode : null;
    }
    /**
     * Set GroupCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupCode
     * @return \StructType\AcsEmployeeGroup
     */
    public function setGroupCode(?string $groupCode = null): self
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupCode, true), gettype($groupCode)), __LINE__);
        }
        if (is_null($groupCode) || (is_array($groupCode) && empty($groupCode))) {
            unset($this->GroupCode);
        } else {
            $this->GroupCode = $groupCode;
        }
        
        return $this;
    }
    /**
     * Get GroupType value
     * @return string|null
     */
    public function getGroupType(): ?string
    {
        return $this->GroupType;
    }
    /**
     * Set GroupType value
     * @uses \EnumType\EmployeeGroupType::valueIsValid()
     * @uses \EnumType\EmployeeGroupType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $groupType
     * @return \StructType\AcsEmployeeGroup
     */
    public function setGroupType(?string $groupType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmployeeGroupType::valueIsValid($groupType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmployeeGroupType', is_array($groupType) ? implode(', ', $groupType) : var_export($groupType, true), implode(', ', \EnumType\EmployeeGroupType::getValidValues())), __LINE__);
        }
        $this->GroupType = $groupType;
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\AcsEmployeeGroup
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get IsGuestGroup value
     * @return bool|null
     */
    public function getIsGuestGroup(): ?bool
    {
        return $this->IsGuestGroup;
    }
    /**
     * Set IsGuestGroup value
     * @param bool $isGuestGroup
     * @return \StructType\AcsEmployeeGroup
     */
    public function setIsGuestGroup(?bool $isGuestGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGuestGroup) && !is_bool($isGuestGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGuestGroup, true), gettype($isGuestGroup)), __LINE__);
        }
        $this->IsGuestGroup = $isGuestGroup;
        
        return $this;
    }
    /**
     * Get IsRemoved value
     * @return bool|null
     */
    public function getIsRemoved(): ?bool
    {
        return $this->IsRemoved;
    }
    /**
     * Set IsRemoved value
     * @param bool $isRemoved
     * @return \StructType\AcsEmployeeGroup
     */
    public function setIsRemoved(?bool $isRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRemoved) && !is_bool($isRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRemoved, true), gettype($isRemoved)), __LINE__);
        }
        $this->IsRemoved = $isRemoved;
        
        return $this;
    }
    /**
     * Get ModificationDateTime value
     * @return string|null
     */
    public function getModificationDateTime(): ?string
    {
        return $this->ModificationDateTime;
    }
    /**
     * Set ModificationDateTime value
     * @param string $modificationDateTime
     * @return \StructType\AcsEmployeeGroup
     */
    public function setModificationDateTime(?string $modificationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modificationDateTime) && !is_string($modificationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modificationDateTime, true), gettype($modificationDateTime)), __LINE__);
        }
        $this->ModificationDateTime = $modificationDateTime;
        
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
     * @return \StructType\AcsEmployeeGroup
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
}
