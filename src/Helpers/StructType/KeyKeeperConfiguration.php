<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyKeeperConfiguration StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:KeyKeeperConfiguration
 * @subpackage Structs
 */
class KeyKeeperConfiguration extends AbstractStructBase
{
    /**
     * The CreatedDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatedDateTime = null;
    /**
     * The MdifiedDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MdifiedDateTime = null;
    /**
     * The NTP1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NTP1 = null;
    /**
     * The NTP2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NTP2 = null;
    /**
     * The NTP3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NTP3 = null;
    /**
     * The RfidKeyLength
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RfidKeyLength = null;
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TimeZone = null;
    /**
     * Constructor method for KeyKeeperConfiguration
     * @uses KeyKeeperConfiguration::setCreatedDateTime()
     * @uses KeyKeeperConfiguration::setMdifiedDateTime()
     * @uses KeyKeeperConfiguration::setNTP1()
     * @uses KeyKeeperConfiguration::setNTP2()
     * @uses KeyKeeperConfiguration::setNTP3()
     * @uses KeyKeeperConfiguration::setRfidKeyLength()
     * @uses KeyKeeperConfiguration::setTimeZone()
     * @param string $createdDateTime
     * @param string $mdifiedDateTime
     * @param string $nTP1
     * @param string $nTP2
     * @param string $nTP3
     * @param int $rfidKeyLength
     * @param string $timeZone
     */
    public function __construct(?string $createdDateTime = null, ?string $mdifiedDateTime = null, ?string $nTP1 = null, ?string $nTP2 = null, ?string $nTP3 = null, ?int $rfidKeyLength = null, ?string $timeZone = null)
    {
        $this
            ->setCreatedDateTime($createdDateTime)
            ->setMdifiedDateTime($mdifiedDateTime)
            ->setNTP1($nTP1)
            ->setNTP2($nTP2)
            ->setNTP3($nTP3)
            ->setRfidKeyLength($rfidKeyLength)
            ->setTimeZone($timeZone);
    }
    /**
     * Get CreatedDateTime value
     * @return string|null
     */
    public function getCreatedDateTime(): ?string
    {
        return $this->CreatedDateTime;
    }
    /**
     * Set CreatedDateTime value
     * @param string $createdDateTime
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setCreatedDateTime(?string $createdDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDateTime) && !is_string($createdDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDateTime, true), gettype($createdDateTime)), __LINE__);
        }
        $this->CreatedDateTime = $createdDateTime;
        
        return $this;
    }
    /**
     * Get MdifiedDateTime value
     * @return string|null
     */
    public function getMdifiedDateTime(): ?string
    {
        return $this->MdifiedDateTime;
    }
    /**
     * Set MdifiedDateTime value
     * @param string $mdifiedDateTime
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setMdifiedDateTime(?string $mdifiedDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($mdifiedDateTime) && !is_string($mdifiedDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdifiedDateTime, true), gettype($mdifiedDateTime)), __LINE__);
        }
        $this->MdifiedDateTime = $mdifiedDateTime;
        
        return $this;
    }
    /**
     * Get NTP1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNTP1(): ?string
    {
        return isset($this->NTP1) ? $this->NTP1 : null;
    }
    /**
     * Set NTP1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nTP1
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setNTP1(?string $nTP1 = null): self
    {
        // validation for constraint: string
        if (!is_null($nTP1) && !is_string($nTP1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nTP1, true), gettype($nTP1)), __LINE__);
        }
        if (is_null($nTP1) || (is_array($nTP1) && empty($nTP1))) {
            unset($this->NTP1);
        } else {
            $this->NTP1 = $nTP1;
        }
        
        return $this;
    }
    /**
     * Get NTP2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNTP2(): ?string
    {
        return isset($this->NTP2) ? $this->NTP2 : null;
    }
    /**
     * Set NTP2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nTP2
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setNTP2(?string $nTP2 = null): self
    {
        // validation for constraint: string
        if (!is_null($nTP2) && !is_string($nTP2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nTP2, true), gettype($nTP2)), __LINE__);
        }
        if (is_null($nTP2) || (is_array($nTP2) && empty($nTP2))) {
            unset($this->NTP2);
        } else {
            $this->NTP2 = $nTP2;
        }
        
        return $this;
    }
    /**
     * Get NTP3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNTP3(): ?string
    {
        return isset($this->NTP3) ? $this->NTP3 : null;
    }
    /**
     * Set NTP3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nTP3
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setNTP3(?string $nTP3 = null): self
    {
        // validation for constraint: string
        if (!is_null($nTP3) && !is_string($nTP3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nTP3, true), gettype($nTP3)), __LINE__);
        }
        if (is_null($nTP3) || (is_array($nTP3) && empty($nTP3))) {
            unset($this->NTP3);
        } else {
            $this->NTP3 = $nTP3;
        }
        
        return $this;
    }
    /**
     * Get RfidKeyLength value
     * @return int|null
     */
    public function getRfidKeyLength(): ?int
    {
        return $this->RfidKeyLength;
    }
    /**
     * Set RfidKeyLength value
     * @param int $rfidKeyLength
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setRfidKeyLength(?int $rfidKeyLength = null): self
    {
        // validation for constraint: int
        if (!is_null($rfidKeyLength) && !(is_int($rfidKeyLength) || ctype_digit($rfidKeyLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rfidKeyLength, true), gettype($rfidKeyLength)), __LINE__);
        }
        $this->RfidKeyLength = $rfidKeyLength;
        
        return $this;
    }
    /**
     * Get TimeZone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeZone(): ?string
    {
        return isset($this->TimeZone) ? $this->TimeZone : null;
    }
    /**
     * Set TimeZone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeZone
     * @return \StructType\KeyKeeperConfiguration
     */
    public function setTimeZone(?string $timeZone = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZone, true), gettype($timeZone)), __LINE__);
        }
        if (is_null($timeZone) || (is_array($timeZone) && empty($timeZone))) {
            unset($this->TimeZone);
        } else {
            $this->TimeZone = $timeZone;
        }
        
        return $this;
    }
}
