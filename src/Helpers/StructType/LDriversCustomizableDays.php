<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LDriversCustomizableDays StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LDriversCustomizableDays
 * @subpackage Structs
 */
class LDriversCustomizableDays extends AbstractStructBase
{
    /**
     * The Days
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLCustomizableDayInfo|null
     */
    protected ?\ArrayType\ArrayOfLCustomizableDayInfo $Days = null;
    /**
     * The DriverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverID = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * Constructor method for LDriversCustomizableDays
     * @uses LDriversCustomizableDays::setDays()
     * @uses LDriversCustomizableDays::setDriverID()
     * @uses LDriversCustomizableDays::setId()
     * @param \ArrayType\ArrayOfLCustomizableDayInfo $days
     * @param string $driverID
     * @param int $id
     */
    public function __construct(?\ArrayType\ArrayOfLCustomizableDayInfo $days = null, ?string $driverID = null, ?int $id = null)
    {
        $this
            ->setDays($days)
            ->setDriverID($driverID)
            ->setId($id);
    }
    /**
     * Get Days value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLCustomizableDayInfo|null
     */
    public function getDays(): ?\ArrayType\ArrayOfLCustomizableDayInfo
    {
        return isset($this->Days) ? $this->Days : null;
    }
    /**
     * Set Days value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLCustomizableDayInfo $days
     * @return \StructType\LDriversCustomizableDays
     */
    public function setDays(?\ArrayType\ArrayOfLCustomizableDayInfo $days = null): self
    {
        if (is_null($days) || (is_array($days) && empty($days))) {
            unset($this->Days);
        } else {
            $this->Days = $days;
        }
        
        return $this;
    }
    /**
     * Get DriverID value
     * @return string|null
     */
    public function getDriverID(): ?string
    {
        return $this->DriverID;
    }
    /**
     * Set DriverID value
     * @param string $driverID
     * @return \StructType\LDriversCustomizableDays
     */
    public function setDriverID(?string $driverID = null): self
    {
        // validation for constraint: string
        if (!is_null($driverID) && !is_string($driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverID, true), gettype($driverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverID, true)), __LINE__);
        }
        $this->DriverID = $driverID;
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \StructType\LDriversCustomizableDays
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
