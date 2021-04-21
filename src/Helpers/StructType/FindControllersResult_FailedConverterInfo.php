<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindControllersResult.FailedConverterInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FindControllersResult.FailedConverterInfo
 * @subpackage Structs
 */
class FindControllersResult_FailedConverterInfo extends AbstractStructBase
{
    /**
     * The ConverterAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanConverterAddress|null
     */
    protected ?\StructType\CanConverterAddress $ConverterAddress = null;
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Error = null;
    /**
     * Constructor method for FindControllersResult.FailedConverterInfo
     * @uses FindControllersResult_FailedConverterInfo::setConverterAddress()
     * @uses FindControllersResult_FailedConverterInfo::setError()
     * @param \StructType\CanConverterAddress $converterAddress
     * @param string $error
     */
    public function __construct(?\StructType\CanConverterAddress $converterAddress = null, ?string $error = null)
    {
        $this
            ->setConverterAddress($converterAddress)
            ->setError($error);
    }
    /**
     * Get ConverterAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanConverterAddress|null
     */
    public function getConverterAddress(): ?\StructType\CanConverterAddress
    {
        return isset($this->ConverterAddress) ? $this->ConverterAddress : null;
    }
    /**
     * Set ConverterAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CanConverterAddress $converterAddress
     * @return \StructType\FindControllersResult_FailedConverterInfo
     */
    public function setConverterAddress(?\StructType\CanConverterAddress $converterAddress = null): self
    {
        if (is_null($converterAddress) || (is_array($converterAddress) && empty($converterAddress))) {
            unset($this->ConverterAddress);
        } else {
            $this->ConverterAddress = $converterAddress;
        }
        
        return $this;
    }
    /**
     * Get Error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getError(): ?string
    {
        return isset($this->Error) ? $this->Error : null;
    }
    /**
     * Set Error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $error
     * @return \StructType\FindControllersResult_FailedConverterInfo
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->Error);
        } else {
            $this->Error = $error;
        }
        
        return $this;
    }
}
