<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_IIDK_SaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_IIDK_SaveData
 * @subpackage Structs
 */
class ISS_IIDK_SaveData extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Address = null;
    /**
     * The ISS_ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ISS_ID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Port
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Port = null;
    /**
     * Constructor method for ISS_IIDK_SaveData
     * @uses ISS_IIDK_SaveData::setAddress()
     * @uses ISS_IIDK_SaveData::setISS_ID()
     * @uses ISS_IIDK_SaveData::setName()
     * @uses ISS_IIDK_SaveData::setPort()
     * @param string $address
     * @param int $iSS_ID
     * @param string $name
     * @param int $port
     */
    public function __construct(?string $address = null, ?int $iSS_ID = null, ?string $name = null, ?int $port = null)
    {
        $this
            ->setAddress($address)
            ->setISS_ID($iSS_ID)
            ->setName($name)
            ->setPort($port);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \StructType\ISS_IIDK_SaveData
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
        return $this;
    }
    /**
     * Get ISS_ID value
     * @return int|null
     */
    public function getISS_ID(): ?int
    {
        return $this->ISS_ID;
    }
    /**
     * Set ISS_ID value
     * @param int $iSS_ID
     * @return \StructType\ISS_IIDK_SaveData
     */
    public function setISS_ID(?int $iSS_ID = null): self
    {
        // validation for constraint: int
        if (!is_null($iSS_ID) && !(is_int($iSS_ID) || ctype_digit($iSS_ID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iSS_ID, true), gettype($iSS_ID)), __LINE__);
        }
        $this->ISS_ID = $iSS_ID;
        
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
     * @return \StructType\ISS_IIDK_SaveData
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
     * Get Port value
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->Port;
    }
    /**
     * Set Port value
     * @param int $port
     * @return \StructType\ISS_IIDK_SaveData
     */
    public function setPort(?int $port = null): self
    {
        // validation for constraint: int
        if (!is_null($port) && !(is_int($port) || ctype_digit($port))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($port, true), gettype($port)), __LINE__);
        }
        $this->Port = $port;
        
        return $this;
    }
}
