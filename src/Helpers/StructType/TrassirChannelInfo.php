<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrassirChannelInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TrassirChannelInfo
 * @subpackage Structs
 */
class TrassirChannelInfo extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The TrassirID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TrassirID = null;
    /**
     * Constructor method for TrassirChannelInfo
     * @uses TrassirChannelInfo::setName()
     * @uses TrassirChannelInfo::setTrassirID()
     * @param string $name
     * @param string $trassirID
     */
    public function __construct(?string $name = null, ?string $trassirID = null)
    {
        $this
            ->setName($name)
            ->setTrassirID($trassirID);
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
     * @return \StructType\TrassirChannelInfo
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
     * Get TrassirID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTrassirID(): ?string
    {
        return isset($this->TrassirID) ? $this->TrassirID : null;
    }
    /**
     * Set TrassirID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $trassirID
     * @return \StructType\TrassirChannelInfo
     */
    public function setTrassirID(?string $trassirID = null): self
    {
        // validation for constraint: string
        if (!is_null($trassirID) && !is_string($trassirID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trassirID, true), gettype($trassirID)), __LINE__);
        }
        if (is_null($trassirID) || (is_array($trassirID) && empty($trassirID))) {
            unset($this->TrassirID);
        } else {
            $this->TrassirID = $trassirID;
        }
        
        return $this;
    }
}
