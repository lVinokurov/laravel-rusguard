<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindLanConverterResponse StructType
 * @subpackage Structs
 */
class FindLanConverterResponse extends AbstractStructBase
{
    /**
     * The FindLanConverterResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LanCanConverter|null
     */
    protected ?\StructType\LanCanConverter $FindLanConverterResult = null;
    /**
     * Constructor method for FindLanConverterResponse
     * @uses FindLanConverterResponse::setFindLanConverterResult()
     * @param \StructType\LanCanConverter $findLanConverterResult
     */
    public function __construct(?\StructType\LanCanConverter $findLanConverterResult = null)
    {
        $this
            ->setFindLanConverterResult($findLanConverterResult);
    }
    /**
     * Get FindLanConverterResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LanCanConverter|null
     */
    public function getFindLanConverterResult(): ?\StructType\LanCanConverter
    {
        return isset($this->FindLanConverterResult) ? $this->FindLanConverterResult : null;
    }
    /**
     * Set FindLanConverterResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LanCanConverter $findLanConverterResult
     * @return \StructType\FindLanConverterResponse
     */
    public function setFindLanConverterResult(?\StructType\LanCanConverter $findLanConverterResult = null): self
    {
        if (is_null($findLanConverterResult) || (is_array($findLanConverterResult) && empty($findLanConverterResult))) {
            unset($this->FindLanConverterResult);
        } else {
            $this->FindLanConverterResult = $findLanConverterResult;
        }
        
        return $this;
    }
}
