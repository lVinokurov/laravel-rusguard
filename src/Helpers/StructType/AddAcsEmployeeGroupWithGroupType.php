<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsEmployeeGroupWithGroupType StructType
 * @subpackage Structs
 */
class AddAcsEmployeeGroupWithGroupType extends AbstractStructBase
{
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $parentId = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The tagIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $tagIDs = null;
    /**
     * The isGuestGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $isGuestGroup = null;
    /**
     * The groupCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $groupCode = null;
    /**
     * Constructor method for AddAcsEmployeeGroupWithGroupType
     * @uses AddAcsEmployeeGroupWithGroupType::setParentId()
     * @uses AddAcsEmployeeGroupWithGroupType::setName()
     * @uses AddAcsEmployeeGroupWithGroupType::setComment()
     * @uses AddAcsEmployeeGroupWithGroupType::setTagIDs()
     * @uses AddAcsEmployeeGroupWithGroupType::setIsGuestGroup()
     * @uses AddAcsEmployeeGroupWithGroupType::setGroupCode()
     * @param string $parentId
     * @param string $name
     * @param string $comment
     * @param \ArrayType\ArrayOfguid $tagIDs
     * @param string $isGuestGroup
     * @param string $groupCode
     */
    public function __construct(?string $parentId = null, ?string $name = null, ?string $comment = null, ?\ArrayType\ArrayOfguid $tagIDs = null, ?string $isGuestGroup = null, ?string $groupCode = null)
    {
        $this
            ->setParentId($parentId)
            ->setName($name)
            ->setComment($comment)
            ->setTagIDs($tagIDs)
            ->setIsGuestGroup($isGuestGroup)
            ->setGroupCode($groupCode);
    }
    /**
     * Get parentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return isset($this->parentId) ? $this->parentId : null;
    }
    /**
     * Set parentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentId
     * @return \StructType\AddAcsEmployeeGroupWithGroupType
     */
    public function setParentId(?string $parentId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentId, true)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->parentId);
        } else {
            $this->parentId = $parentId;
        }
        
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AddAcsEmployeeGroupWithGroupType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->comment) ? $this->comment : null;
    }
    /**
     * Set comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\AddAcsEmployeeGroupWithGroupType
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->comment);
        } else {
            $this->comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get tagIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getTagIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->tagIDs) ? $this->tagIDs : null;
    }
    /**
     * Set tagIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $tagIDs
     * @return \StructType\AddAcsEmployeeGroupWithGroupType
     */
    public function setTagIDs(?\ArrayType\ArrayOfguid $tagIDs = null): self
    {
        if (is_null($tagIDs) || (is_array($tagIDs) && empty($tagIDs))) {
            unset($this->tagIDs);
        } else {
            $this->tagIDs = $tagIDs;
        }
        
        return $this;
    }
    /**
     * Get isGuestGroup value
     * @return string|null
     */
    public function getIsGuestGroup(): ?string
    {
        return $this->isGuestGroup;
    }
    /**
     * Set isGuestGroup value
     * @uses \EnumType\EmployeeGroupType::valueIsValid()
     * @uses \EnumType\EmployeeGroupType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $isGuestGroup
     * @return \StructType\AddAcsEmployeeGroupWithGroupType
     */
    public function setIsGuestGroup(?string $isGuestGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmployeeGroupType::valueIsValid($isGuestGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmployeeGroupType', is_array($isGuestGroup) ? implode(', ', $isGuestGroup) : var_export($isGuestGroup, true), implode(', ', \EnumType\EmployeeGroupType::getValidValues())), __LINE__);
        }
        $this->isGuestGroup = $isGuestGroup;
        
        return $this;
    }
    /**
     * Get groupCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupCode(): ?string
    {
        return isset($this->groupCode) ? $this->groupCode : null;
    }
    /**
     * Set groupCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupCode
     * @return \StructType\AddAcsEmployeeGroupWithGroupType
     */
    public function setGroupCode(?string $groupCode = null): self
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupCode, true), gettype($groupCode)), __LINE__);
        }
        if (is_null($groupCode) || (is_array($groupCode) && empty($groupCode))) {
            unset($this->groupCode);
        } else {
            $this->groupCode = $groupCode;
        }
        
        return $this;
    }
}
