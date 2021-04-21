<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadPanasonicConfigurationResponse StructType
 * @subpackage Structs
 */
class LoadPanasonicConfigurationResponse extends AbstractStructBase
{
    /**
     * The LoadPanasonicConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PanasonicCameraCollectionResult|null
     */
    protected ?\StructType\PanasonicCameraCollectionResult $LoadPanasonicConfigurationResult = null;
    /**
     * Constructor method for LoadPanasonicConfigurationResponse
     * @uses LoadPanasonicConfigurationResponse::setLoadPanasonicConfigurationResult()
     * @param \StructType\PanasonicCameraCollectionResult $loadPanasonicConfigurationResult
     */
    public function __construct(?\StructType\PanasonicCameraCollectionResult $loadPanasonicConfigurationResult = null)
    {
        $this
            ->setLoadPanasonicConfigurationResult($loadPanasonicConfigurationResult);
    }
    /**
     * Get LoadPanasonicConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PanasonicCameraCollectionResult|null
     */
    public function getLoadPanasonicConfigurationResult(): ?\StructType\PanasonicCameraCollectionResult
    {
        return isset($this->LoadPanasonicConfigurationResult) ? $this->LoadPanasonicConfigurationResult : null;
    }
    /**
     * Set LoadPanasonicConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PanasonicCameraCollectionResult $loadPanasonicConfigurationResult
     * @return \StructType\LoadPanasonicConfigurationResponse
     */
    public function setLoadPanasonicConfigurationResult(?\StructType\PanasonicCameraCollectionResult $loadPanasonicConfigurationResult = null): self
    {
        if (is_null($loadPanasonicConfigurationResult) || (is_array($loadPanasonicConfigurationResult) && empty($loadPanasonicConfigurationResult))) {
            unset($this->LoadPanasonicConfigurationResult);
        } else {
            $this->LoadPanasonicConfigurationResult = $loadPanasonicConfigurationResult;
        }
        
        return $this;
    }
}
