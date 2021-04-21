<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessOnChangeDriver StructType
 * @subpackage Structs
 */
class ProcessOnChangeDriver extends AbstractStructBase
{
    /**
     * The driverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $driverID = null;
    /**
     * The driverType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $driverType = null;
    /**
     * Constructor method for ProcessOnChangeDriver
     * @uses ProcessOnChangeDriver::setDriverID()
     * @uses ProcessOnChangeDriver::setDriverType()
     * @param string $driverID
     * @param string $driverType
     */
    public function __construct(?string $driverID = null, ?string $driverType = null)
    {
        $this
            ->setDriverID($driverID)
            ->setDriverType($driverType);
    }
    /**
     * Get driverID value
     * @return string|null
     */
    public function getDriverID(): ?string
    {
        return $this->driverID;
    }
    /**
     * Set driverID value
     * @param string $driverID
     * @return \StructType\ProcessOnChangeDriver
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
        $this->driverID = $driverID;
        
        return $this;
    }
    /**
     * Get driverType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverType(): ?string
    {
        return isset($this->driverType) ? $this->driverType : null;
    }
    /**
     * Set driverType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverType
     * @return \StructType\ProcessOnChangeDriver
     */
    public function setDriverType(?string $driverType = null): self
    {
        // validation for constraint: string
        if (!is_null($driverType) && !is_string($driverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverType, true), gettype($driverType)), __LINE__);
        }
        if (is_null($driverType) || (is_array($driverType) && empty($driverType))) {
            unset($this->driverType);
        } else {
            $this->driverType = $driverType;
        }
        
        return $this;
    }
}
