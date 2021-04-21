<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindNotifyResponse StructType
 * @subpackage Structs
 */
class FindNotifyResponse extends AbstractStructBase
{
    /**
     * The FindNotifyResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $FindNotifyResult = null;
    /**
     * Constructor method for FindNotifyResponse
     * @uses FindNotifyResponse::setFindNotifyResult()
     * @param \ArrayType\ArrayOfguid $findNotifyResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $findNotifyResult = null)
    {
        $this
            ->setFindNotifyResult($findNotifyResult);
    }
    /**
     * Get FindNotifyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getFindNotifyResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->FindNotifyResult) ? $this->FindNotifyResult : null;
    }
    /**
     * Set FindNotifyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $findNotifyResult
     * @return \StructType\FindNotifyResponse
     */
    public function setFindNotifyResult(?\ArrayType\ArrayOfguid $findNotifyResult = null): self
    {
        if (is_null($findNotifyResult) || (is_array($findNotifyResult) && empty($findNotifyResult))) {
            unset($this->FindNotifyResult);
        } else {
            $this->FindNotifyResult = $findNotifyResult;
        }
        
        return $this;
    }
}
