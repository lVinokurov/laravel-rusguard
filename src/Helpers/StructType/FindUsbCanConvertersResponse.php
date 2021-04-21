<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindUsbCanConvertersResponse StructType
 * @subpackage Structs
 */
class FindUsbCanConvertersResponse extends AbstractStructBase
{
    /**
     * The FindUsbCanConvertersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FindConvertersResult|null
     */
    protected ?\StructType\FindConvertersResult $FindUsbCanConvertersResult = null;
    /**
     * Constructor method for FindUsbCanConvertersResponse
     * @uses FindUsbCanConvertersResponse::setFindUsbCanConvertersResult()
     * @param \StructType\FindConvertersResult $findUsbCanConvertersResult
     */
    public function __construct(?\StructType\FindConvertersResult $findUsbCanConvertersResult = null)
    {
        $this
            ->setFindUsbCanConvertersResult($findUsbCanConvertersResult);
    }
    /**
     * Get FindUsbCanConvertersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FindConvertersResult|null
     */
    public function getFindUsbCanConvertersResult(): ?\StructType\FindConvertersResult
    {
        return isset($this->FindUsbCanConvertersResult) ? $this->FindUsbCanConvertersResult : null;
    }
    /**
     * Set FindUsbCanConvertersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FindConvertersResult $findUsbCanConvertersResult
     * @return \StructType\FindUsbCanConvertersResponse
     */
    public function setFindUsbCanConvertersResult(?\StructType\FindConvertersResult $findUsbCanConvertersResult = null): self
    {
        if (is_null($findUsbCanConvertersResult) || (is_array($findUsbCanConvertersResult) && empty($findUsbCanConvertersResult))) {
            unset($this->FindUsbCanConvertersResult);
        } else {
            $this->FindUsbCanConvertersResult = $findUsbCanConvertersResult;
        }
        
        return $this;
    }
}
