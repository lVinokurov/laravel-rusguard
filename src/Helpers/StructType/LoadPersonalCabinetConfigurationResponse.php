<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadPersonalCabinetConfigurationResponse StructType
 * @subpackage Structs
 */
class LoadPersonalCabinetConfigurationResponse extends AbstractStructBase
{
    /**
     * The LoadPersonalCabinetConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IvideonRemoteServerCollectionResult|null
     */
    protected ?\StructType\IvideonRemoteServerCollectionResult $LoadPersonalCabinetConfigurationResult = null;
    /**
     * Constructor method for LoadPersonalCabinetConfigurationResponse
     * @uses LoadPersonalCabinetConfigurationResponse::setLoadPersonalCabinetConfigurationResult()
     * @param \StructType\IvideonRemoteServerCollectionResult $loadPersonalCabinetConfigurationResult
     */
    public function __construct(?\StructType\IvideonRemoteServerCollectionResult $loadPersonalCabinetConfigurationResult = null)
    {
        $this
            ->setLoadPersonalCabinetConfigurationResult($loadPersonalCabinetConfigurationResult);
    }
    /**
     * Get LoadPersonalCabinetConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IvideonRemoteServerCollectionResult|null
     */
    public function getLoadPersonalCabinetConfigurationResult(): ?\StructType\IvideonRemoteServerCollectionResult
    {
        return isset($this->LoadPersonalCabinetConfigurationResult) ? $this->LoadPersonalCabinetConfigurationResult : null;
    }
    /**
     * Set LoadPersonalCabinetConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IvideonRemoteServerCollectionResult $loadPersonalCabinetConfigurationResult
     * @return \StructType\LoadPersonalCabinetConfigurationResponse
     */
    public function setLoadPersonalCabinetConfigurationResult(?\StructType\IvideonRemoteServerCollectionResult $loadPersonalCabinetConfigurationResult = null): self
    {
        if (is_null($loadPersonalCabinetConfigurationResult) || (is_array($loadPersonalCabinetConfigurationResult) && empty($loadPersonalCabinetConfigurationResult))) {
            unset($this->LoadPersonalCabinetConfigurationResult);
        } else {
            $this->LoadPersonalCabinetConfigurationResult = $loadPersonalCabinetConfigurationResult;
        }
        
        return $this;
    }
}
