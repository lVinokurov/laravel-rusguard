<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeFull StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeFull
 * @subpackage Structs
 */
class AcsEmployeeFull extends AcsEmployeeFullBase
{
    /**
     * The CreationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDateTime = null;
    /**
     * The EmployeeGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeGroupID = null;
    /**
     * The EmployeeGroupPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroupPath = null;
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
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionInfo|null
     */
    protected ?\StructType\LEmployeePositionInfo $Position = null;
    /**
     * Constructor method for AcsEmployeeFull
     * @uses AcsEmployeeFull::setCreationDateTime()
     * @uses AcsEmployeeFull::setEmployeeGroupID()
     * @uses AcsEmployeeFull::setEmployeeGroupPath()
     * @uses AcsEmployeeFull::setID()
     * @uses AcsEmployeeFull::setIsRemoved()
     * @uses AcsEmployeeFull::setModificationDateTime()
     * @uses AcsEmployeeFull::setPosition()
     * @param string $creationDateTime
     * @param string $employeeGroupID
     * @param string $employeeGroupPath
     * @param string $iD
     * @param bool $isRemoved
     * @param string $modificationDateTime
     * @param \StructType\LEmployeePositionInfo $position
     */
    public function __construct(?string $creationDateTime = null, ?string $employeeGroupID = null, ?string $employeeGroupPath = null, ?string $iD = null, ?bool $isRemoved = null, ?string $modificationDateTime = null, ?\StructType\LEmployeePositionInfo $position = null)
    {
        $this
            ->setCreationDateTime($creationDateTime)
            ->setEmployeeGroupID($employeeGroupID)
            ->setEmployeeGroupPath($employeeGroupPath)
            ->setID($iD)
            ->setIsRemoved($isRemoved)
            ->setModificationDateTime($modificationDateTime)
            ->setPosition($position);
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
     * @return \StructType\AcsEmployeeFull
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
     * Get EmployeeGroupID value
     * @return string|null
     */
    public function getEmployeeGroupID(): ?string
    {
        return $this->EmployeeGroupID;
    }
    /**
     * Set EmployeeGroupID value
     * @param string $employeeGroupID
     * @return \StructType\AcsEmployeeFull
     */
    public function setEmployeeGroupID(?string $employeeGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupID) && !is_string($employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupID, true), gettype($employeeGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupID, true)), __LINE__);
        }
        $this->EmployeeGroupID = $employeeGroupID;
        
        return $this;
    }
    /**
     * Get EmployeeGroupPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroupPath(): ?string
    {
        return isset($this->EmployeeGroupPath) ? $this->EmployeeGroupPath : null;
    }
    /**
     * Set EmployeeGroupPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroupPath
     * @return \StructType\AcsEmployeeFull
     */
    public function setEmployeeGroupPath(?string $employeeGroupPath = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupPath) && !is_string($employeeGroupPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupPath, true), gettype($employeeGroupPath)), __LINE__);
        }
        if (is_null($employeeGroupPath) || (is_array($employeeGroupPath) && empty($employeeGroupPath))) {
            unset($this->EmployeeGroupPath);
        } else {
            $this->EmployeeGroupPath = $employeeGroupPath;
        }
        
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
     * @return \StructType\AcsEmployeeFull
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
     * @return \StructType\AcsEmployeeFull
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
     * @return \StructType\AcsEmployeeFull
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
     * Get Position value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function getPosition(): ?\StructType\LEmployeePositionInfo
    {
        return isset($this->Position) ? $this->Position : null;
    }
    /**
     * Set Position value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionInfo $position
     * @return \StructType\AcsEmployeeFull
     */
    public function setPosition(?\StructType\LEmployeePositionInfo $position = null): self
    {
        if (is_null($position) || (is_array($position) && empty($position))) {
            unset($this->Position);
        } else {
            $this->Position = $position;
        }
        
        return $this;
    }
}
