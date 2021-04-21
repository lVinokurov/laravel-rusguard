<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeesVehicle StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeesVehicle
 * @subpackage Structs
 */
class EmployeesVehicle extends AbstractStructBase
{
    /**
     * The EndDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDateTime = null;
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
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDateTime = null;
    /**
     * Constructor method for EmployeesVehicle
     * @uses EmployeesVehicle::setEndDateTime()
     * @uses EmployeesVehicle::setID()
     * @uses EmployeesVehicle::setStartDateTime()
     * @param string $endDateTime
     * @param string $iD
     * @param string $startDateTime
     */
    public function __construct(?string $endDateTime = null, ?string $iD = null, ?string $startDateTime = null)
    {
        $this
            ->setEndDateTime($endDateTime)
            ->setID($iD)
            ->setStartDateTime($startDateTime);
    }
    /**
     * Get EndDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDateTime(): ?string
    {
        return isset($this->EndDateTime) ? $this->EndDateTime : null;
    }
    /**
     * Set EndDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDateTime
     * @return \StructType\EmployeesVehicle
     */
    public function setEndDateTime(?string $endDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateTime, true), gettype($endDateTime)), __LINE__);
        }
        if (is_null($endDateTime) || (is_array($endDateTime) && empty($endDateTime))) {
            unset($this->EndDateTime);
        } else {
            $this->EndDateTime = $endDateTime;
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
     * @return \StructType\EmployeesVehicle
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
     * Get StartDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return isset($this->StartDateTime) ? $this->StartDateTime : null;
    }
    /**
     * Set StartDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateTime
     * @return \StructType\EmployeesVehicle
     */
    public function setStartDateTime(?string $startDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        if (is_null($startDateTime) || (is_array($startDateTime) && empty($startDateTime))) {
            unset($this->StartDateTime);
        } else {
            $this->StartDateTime = $startDateTime;
        }
        
        return $this;
    }
}
