<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeInfo
 * @subpackage Structs
 */
class EmployeeInfo extends AbstractStructBase
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
     * The Fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfVariableInfo|null
     */
    protected ?\ArrayType\ArrayOfVariableInfo $Fields = null;
    /**
     * The Photo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Photo = null;
    /**
     * Constructor method for EmployeeInfo
     * @uses EmployeeInfo::setEmployeeID()
     * @uses EmployeeInfo::setFields()
     * @uses EmployeeInfo::setPhoto()
     * @param string $employeeID
     * @param \ArrayType\ArrayOfVariableInfo $fields
     * @param string $photo
     */
    public function __construct(?string $employeeID = null, ?\ArrayType\ArrayOfVariableInfo $fields = null, ?string $photo = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setFields($fields)
            ->setPhoto($photo);
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
     * @return \StructType\EmployeeInfo
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
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfVariableInfo|null
     */
    public function getFields(): ?\ArrayType\ArrayOfVariableInfo
    {
        return isset($this->Fields) ? $this->Fields : null;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfVariableInfo $fields
     * @return \StructType\EmployeeInfo
     */
    public function setFields(?\ArrayType\ArrayOfVariableInfo $fields = null): self
    {
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
        }
        
        return $this;
    }
    /**
     * Get Photo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return isset($this->Photo) ? $this->Photo : null;
    }
    /**
     * Set Photo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $photo
     * @return \StructType\EmployeeInfo
     */
    public function setPhoto(?string $photo = null): self
    {
        // validation for constraint: string
        if (!is_null($photo) && !is_string($photo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photo, true), gettype($photo)), __LINE__);
        }
        if (is_null($photo) || (is_array($photo) && empty($photo))) {
            unset($this->Photo);
        } else {
            $this->Photo = $photo;
        }
        
        return $this;
    }
}
