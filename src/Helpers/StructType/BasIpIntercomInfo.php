<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasIpIntercomInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BasIpIntercomInfo
 * @subpackage Structs
 */
class BasIpIntercomInfo extends AbstractStructBase
{
    /**
     * The IpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $IpAddress = null;
    /**
     * The IsRestSupport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRestSupport = null;
    /**
     * Constructor method for BasIpIntercomInfo
     * @uses BasIpIntercomInfo::setIpAddress()
     * @uses BasIpIntercomInfo::setIsRestSupport()
     * @param \StructType\IPAddress $ipAddress
     * @param bool $isRestSupport
     */
    public function __construct(?\StructType\IPAddress $ipAddress = null, ?bool $isRestSupport = null)
    {
        $this
            ->setIpAddress($ipAddress)
            ->setIsRestSupport($isRestSupport);
    }
    /**
     * Get IpAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IPAddress|null
     */
    public function getIpAddress(): ?\StructType\IPAddress
    {
        return isset($this->IpAddress) ? $this->IpAddress : null;
    }
    /**
     * Set IpAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IPAddress $ipAddress
     * @return \StructType\BasIpIntercomInfo
     */
    public function setIpAddress(?\StructType\IPAddress $ipAddress = null): self
    {
        if (is_null($ipAddress) || (is_array($ipAddress) && empty($ipAddress))) {
            unset($this->IpAddress);
        } else {
            $this->IpAddress = $ipAddress;
        }
        
        return $this;
    }
    /**
     * Get IsRestSupport value
     * @return bool|null
     */
    public function getIsRestSupport(): ?bool
    {
        return $this->IsRestSupport;
    }
    /**
     * Set IsRestSupport value
     * @param bool $isRestSupport
     * @return \StructType\BasIpIntercomInfo
     */
    public function setIsRestSupport(?bool $isRestSupport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRestSupport) && !is_bool($isRestSupport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRestSupport, true), gettype($isRestSupport)), __LINE__);
        }
        $this->IsRestSupport = $isRestSupport;
        
        return $this;
    }
}
