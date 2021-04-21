<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadNUUOConfigurationResponse StructType
 * @subpackage Structs
 */
class LoadNUUOConfigurationResponse extends AbstractStructBase
{
    /**
     * The LoadNUUOConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NUUOArchiveServerCollectionResult|null
     */
    protected ?\StructType\NUUOArchiveServerCollectionResult $LoadNUUOConfigurationResult = null;
    /**
     * Constructor method for LoadNUUOConfigurationResponse
     * @uses LoadNUUOConfigurationResponse::setLoadNUUOConfigurationResult()
     * @param \StructType\NUUOArchiveServerCollectionResult $loadNUUOConfigurationResult
     */
    public function __construct(?\StructType\NUUOArchiveServerCollectionResult $loadNUUOConfigurationResult = null)
    {
        $this
            ->setLoadNUUOConfigurationResult($loadNUUOConfigurationResult);
    }
    /**
     * Get LoadNUUOConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NUUOArchiveServerCollectionResult|null
     */
    public function getLoadNUUOConfigurationResult(): ?\StructType\NUUOArchiveServerCollectionResult
    {
        return isset($this->LoadNUUOConfigurationResult) ? $this->LoadNUUOConfigurationResult : null;
    }
    /**
     * Set LoadNUUOConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\NUUOArchiveServerCollectionResult $loadNUUOConfigurationResult
     * @return \StructType\LoadNUUOConfigurationResponse
     */
    public function setLoadNUUOConfigurationResult(?\StructType\NUUOArchiveServerCollectionResult $loadNUUOConfigurationResult = null): self
    {
        if (is_null($loadNUUOConfigurationResult) || (is_array($loadNUUOConfigurationResult) && empty($loadNUUOConfigurationResult))) {
            unset($this->LoadNUUOConfigurationResult);
        } else {
            $this->LoadNUUOConfigurationResult = $loadNUUOConfigurationResult;
        }
        
        return $this;
    }
}
