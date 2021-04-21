<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViolationFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ViolationFullInfo
 * @subpackage Structs
 */
class ViolationFullInfo extends ViolationSaveInfo
{
    /**
     * The EmployeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeID = null;
    /**
     * The NatureName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NatureName = null;
    /**
     * The TheftMethodName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TheftMethodName = null;
    /**
     * The TypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeName = null;
    /**
     * Constructor method for ViolationFullInfo
     * @uses ViolationFullInfo::setEmployeeID()
     * @uses ViolationFullInfo::setNatureName()
     * @uses ViolationFullInfo::setTheftMethodName()
     * @uses ViolationFullInfo::setTypeName()
     * @param string $employeeID
     * @param string $natureName
     * @param string $theftMethodName
     * @param string $typeName
     */
    public function __construct(?string $employeeID = null, ?string $natureName = null, ?string $theftMethodName = null, ?string $typeName = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setNatureName($natureName)
            ->setTheftMethodName($theftMethodName)
            ->setTypeName($typeName);
    }
    /**
     * Get EmployeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->EmployeeID;
    }
    /**
     * Set EmployeeID value
     * @param string $employeeID
     * @return \StructType\ViolationFullInfo
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        $this->EmployeeID = $employeeID;
        
        return $this;
    }
    /**
     * Get NatureName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNatureName(): ?string
    {
        return isset($this->NatureName) ? $this->NatureName : null;
    }
    /**
     * Set NatureName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $natureName
     * @return \StructType\ViolationFullInfo
     */
    public function setNatureName(?string $natureName = null): self
    {
        // validation for constraint: string
        if (!is_null($natureName) && !is_string($natureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($natureName, true), gettype($natureName)), __LINE__);
        }
        if (is_null($natureName) || (is_array($natureName) && empty($natureName))) {
            unset($this->NatureName);
        } else {
            $this->NatureName = $natureName;
        }
        
        return $this;
    }
    /**
     * Get TheftMethodName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTheftMethodName(): ?string
    {
        return isset($this->TheftMethodName) ? $this->TheftMethodName : null;
    }
    /**
     * Set TheftMethodName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $theftMethodName
     * @return \StructType\ViolationFullInfo
     */
    public function setTheftMethodName(?string $theftMethodName = null): self
    {
        // validation for constraint: string
        if (!is_null($theftMethodName) && !is_string($theftMethodName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theftMethodName, true), gettype($theftMethodName)), __LINE__);
        }
        if (is_null($theftMethodName) || (is_array($theftMethodName) && empty($theftMethodName))) {
            unset($this->TheftMethodName);
        } else {
            $this->TheftMethodName = $theftMethodName;
        }
        
        return $this;
    }
    /**
     * Get TypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeName(): ?string
    {
        return isset($this->TypeName) ? $this->TypeName : null;
    }
    /**
     * Set TypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeName
     * @return \StructType\ViolationFullInfo
     */
    public function setTypeName(?string $typeName = null): self
    {
        // validation for constraint: string
        if (!is_null($typeName) && !is_string($typeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeName, true), gettype($typeName)), __LINE__);
        }
        if (is_null($typeName) || (is_array($typeName) && empty($typeName))) {
            unset($this->TypeName);
        } else {
            $this->TypeName = $typeName;
        }
        
        return $this;
    }
}
