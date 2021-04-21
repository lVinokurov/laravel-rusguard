<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadTrassirConfigurationResponse StructType
 * @subpackage Structs
 */
class LoadTrassirConfigurationResponse extends AbstractStructBase
{
    /**
     * The LoadTrassirConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TrassirIntegrationResult|null
     */
    protected ?\StructType\TrassirIntegrationResult $LoadTrassirConfigurationResult = null;
    /**
     * Constructor method for LoadTrassirConfigurationResponse
     * @uses LoadTrassirConfigurationResponse::setLoadTrassirConfigurationResult()
     * @param \StructType\TrassirIntegrationResult $loadTrassirConfigurationResult
     */
    public function __construct(?\StructType\TrassirIntegrationResult $loadTrassirConfigurationResult = null)
    {
        $this
            ->setLoadTrassirConfigurationResult($loadTrassirConfigurationResult);
    }
    /**
     * Get LoadTrassirConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TrassirIntegrationResult|null
     */
    public function getLoadTrassirConfigurationResult(): ?\StructType\TrassirIntegrationResult
    {
        return isset($this->LoadTrassirConfigurationResult) ? $this->LoadTrassirConfigurationResult : null;
    }
    /**
     * Set LoadTrassirConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TrassirIntegrationResult $loadTrassirConfigurationResult
     * @return \StructType\LoadTrassirConfigurationResponse
     */
    public function setLoadTrassirConfigurationResult(?\StructType\TrassirIntegrationResult $loadTrassirConfigurationResult = null): self
    {
        if (is_null($loadTrassirConfigurationResult) || (is_array($loadTrassirConfigurationResult) && empty($loadTrassirConfigurationResult))) {
            unset($this->LoadTrassirConfigurationResult);
        } else {
            $this->LoadTrassirConfigurationResult = $loadTrassirConfigurationResult;
        }
        
        return $this;
    }
}
