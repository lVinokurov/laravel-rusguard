<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LNetInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LNetInfo
 * @subpackage Structs
 */
class LNetInfo extends AbstractStructBase
{
    /**
     * The GatewayUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GatewayUrl = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsAttached
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAttached = null;
    /**
     * Constructor method for LNetInfo
     * @uses LNetInfo::setGatewayUrl()
     * @uses LNetInfo::setId()
     * @uses LNetInfo::setIsAttached()
     * @param string $gatewayUrl
     * @param string $id
     * @param bool $isAttached
     */
    public function __construct(?string $gatewayUrl = null, ?string $id = null, ?bool $isAttached = null)
    {
        $this
            ->setGatewayUrl($gatewayUrl)
            ->setId($id)
            ->setIsAttached($isAttached);
    }
    /**
     * Get GatewayUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGatewayUrl(): ?string
    {
        return isset($this->GatewayUrl) ? $this->GatewayUrl : null;
    }
    /**
     * Set GatewayUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gatewayUrl
     * @return \StructType\LNetInfo
     */
    public function setGatewayUrl(?string $gatewayUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($gatewayUrl) && !is_string($gatewayUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gatewayUrl, true), gettype($gatewayUrl)), __LINE__);
        }
        if (is_null($gatewayUrl) || (is_array($gatewayUrl) && empty($gatewayUrl))) {
            unset($this->GatewayUrl);
        } else {
            $this->GatewayUrl = $gatewayUrl;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\LNetInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsAttached value
     * @return bool|null
     */
    public function getIsAttached(): ?bool
    {
        return $this->IsAttached;
    }
    /**
     * Set IsAttached value
     * @param bool $isAttached
     * @return \StructType\LNetInfo
     */
    public function setIsAttached(?bool $isAttached = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAttached) && !is_bool($isAttached)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAttached, true), gettype($isAttached)), __LINE__);
        }
        $this->IsAttached = $isAttached;
        
        return $this;
    }
}
