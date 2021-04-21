<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartmentTreeModel StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentTreeModel
 * @subpackage Structs
 */
class DepartmentTreeModel extends AbstractStructBase
{
    /**
     * The HasChild
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasChild = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsInherited
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsInherited = null;
    /**
     * The List
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $List = null;
    /**
     * The ListName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ListName = null;
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
     * Constructor method for DepartmentTreeModel
     * @uses DepartmentTreeModel::setHasChild()
     * @uses DepartmentTreeModel::setId()
     * @uses DepartmentTreeModel::setIsInherited()
     * @uses DepartmentTreeModel::setList()
     * @uses DepartmentTreeModel::setListName()
     * @uses DepartmentTreeModel::setName()
     * @uses DepartmentTreeModel::setParentID()
     * @param bool $hasChild
     * @param string $id
     * @param bool $isInherited
     * @param string $list
     * @param string $listName
     * @param string $name
     * @param string $parentID
     */
    public function __construct(?bool $hasChild = null, ?string $id = null, ?bool $isInherited = null, ?string $list = null, ?string $listName = null, ?string $name = null, ?string $parentID = null)
    {
        $this
            ->setHasChild($hasChild)
            ->setId($id)
            ->setIsInherited($isInherited)
            ->setList($list)
            ->setListName($listName)
            ->setName($name)
            ->setParentID($parentID);
    }
    /**
     * Get HasChild value
     * @return bool|null
     */
    public function getHasChild(): ?bool
    {
        return $this->HasChild;
    }
    /**
     * Set HasChild value
     * @param bool $hasChild
     * @return \StructType\DepartmentTreeModel
     */
    public function setHasChild(?bool $hasChild = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasChild) && !is_bool($hasChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasChild, true), gettype($hasChild)), __LINE__);
        }
        $this->HasChild = $hasChild;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\DepartmentTreeModel
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsInherited value
     * @return bool|null
     */
    public function getIsInherited(): ?bool
    {
        return $this->IsInherited;
    }
    /**
     * Set IsInherited value
     * @param bool $isInherited
     * @return \StructType\DepartmentTreeModel
     */
    public function setIsInherited(?bool $isInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInherited) && !is_bool($isInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInherited, true), gettype($isInherited)), __LINE__);
        }
        $this->IsInherited = $isInherited;
        
        return $this;
    }
    /**
     * Get List value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getList(): ?string
    {
        return isset($this->List) ? $this->List : null;
    }
    /**
     * Set List value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $list
     * @return \StructType\DepartmentTreeModel
     */
    public function setList(?string $list = null): self
    {
        // validation for constraint: string
        if (!is_null($list) && !is_string($list)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($list, true), gettype($list)), __LINE__);
        }
        if (is_null($list) || (is_array($list) && empty($list))) {
            unset($this->List);
        } else {
            $this->List = $list;
        }
        
        return $this;
    }
    /**
     * Get ListName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListName(): ?string
    {
        return isset($this->ListName) ? $this->ListName : null;
    }
    /**
     * Set ListName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listName
     * @return \StructType\DepartmentTreeModel
     */
    public function setListName(?string $listName = null): self
    {
        // validation for constraint: string
        if (!is_null($listName) && !is_string($listName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listName, true), gettype($listName)), __LINE__);
        }
        if (is_null($listName) || (is_array($listName) && empty($listName))) {
            unset($this->ListName);
        } else {
            $this->ListName = $listName;
        }
        
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
     * @return \StructType\DepartmentTreeModel
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
     * @return \StructType\DepartmentTreeModel
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
}
