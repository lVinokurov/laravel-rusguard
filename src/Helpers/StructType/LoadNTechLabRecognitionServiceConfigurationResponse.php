<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadNTechLabRecognitionServiceConfigurationResponse
 * StructType
 * @subpackage Structs
 */
class LoadNTechLabRecognitionServiceConfigurationResponse extends AbstractStructBase
{
    /**
     * The LoadNTechLabRecognitionServiceConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NTechLabRecognitionServiceResult|null
     */
    protected ?\StructType\NTechLabRecognitionServiceResult $LoadNTechLabRecognitionServiceConfigurationResult = null;
    /**
     * Constructor method for LoadNTechLabRecognitionServiceConfigurationResponse
     * @uses LoadNTechLabRecognitionServiceConfigurationResponse::setLoadNTechLabRecognitionServiceConfigurationResult()
     * @param \StructType\NTechLabRecognitionServiceResult $loadNTechLabRecognitionServiceConfigurationResult
     */
    public function __construct(?\StructType\NTechLabRecognitionServiceResult $loadNTechLabRecognitionServiceConfigurationResult = null)
    {
        $this
            ->setLoadNTechLabRecognitionServiceConfigurationResult($loadNTechLabRecognitionServiceConfigurationResult);
    }
    /**
     * Get LoadNTechLabRecognitionServiceConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NTechLabRecognitionServiceResult|null
     */
    public function getLoadNTechLabRecognitionServiceConfigurationResult(): ?\StructType\NTechLabRecognitionServiceResult
    {
        return isset($this->LoadNTechLabRecognitionServiceConfigurationResult) ? $this->LoadNTechLabRecognitionServiceConfigurationResult : null;
    }
    /**
     * Set LoadNTechLabRecognitionServiceConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\NTechLabRecognitionServiceResult $loadNTechLabRecognitionServiceConfigurationResult
     * @return \StructType\LoadNTechLabRecognitionServiceConfigurationResponse
     */
    public function setLoadNTechLabRecognitionServiceConfigurationResult(?\StructType\NTechLabRecognitionServiceResult $loadNTechLabRecognitionServiceConfigurationResult = null): self
    {
        if (is_null($loadNTechLabRecognitionServiceConfigurationResult) || (is_array($loadNTechLabRecognitionServiceConfigurationResult) && empty($loadNTechLabRecognitionServiceConfigurationResult))) {
            unset($this->LoadNTechLabRecognitionServiceConfigurationResult);
        } else {
            $this->LoadNTechLabRecognitionServiceConfigurationResult = $loadNTechLabRecognitionServiceConfigurationResult;
        }
        
        return $this;
    }
}
