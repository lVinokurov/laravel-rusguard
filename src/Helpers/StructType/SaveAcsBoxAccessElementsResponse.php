<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAcsBoxAccessElementsResponse StructType
 * @subpackage Structs
 */
class SaveAcsBoxAccessElementsResponse extends AbstractStructBase
{
    /**
     * The SaveAcsBoxAccessElementsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH|null
     */
    protected ?\StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH $SaveAcsBoxAccessElementsResult = null;
    /**
     * Constructor method for SaveAcsBoxAccessElementsResponse
     * @uses SaveAcsBoxAccessElementsResponse::setSaveAcsBoxAccessElementsResult()
     * @param \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH $saveAcsBoxAccessElementsResult
     */
    public function __construct(?\StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH $saveAcsBoxAccessElementsResult = null)
    {
        $this
            ->setSaveAcsBoxAccessElementsResult($saveAcsBoxAccessElementsResult);
    }
    /**
     * Get SaveAcsBoxAccessElementsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH|null
     */
    public function getSaveAcsBoxAccessElementsResult(): ?\StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH
    {
        return isset($this->SaveAcsBoxAccessElementsResult) ? $this->SaveAcsBoxAccessElementsResult : null;
    }
    /**
     * Set SaveAcsBoxAccessElementsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH $saveAcsBoxAccessElementsResult
     * @return \StructType\SaveAcsBoxAccessElementsResponse
     */
    public function setSaveAcsBoxAccessElementsResult(?\StructType\TupleOfArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoArrayOfAcsBoxAccessLevelElementSlimInfoZNgA9GgH $saveAcsBoxAccessElementsResult = null): self
    {
        if (is_null($saveAcsBoxAccessElementsResult) || (is_array($saveAcsBoxAccessElementsResult) && empty($saveAcsBoxAccessElementsResult))) {
            unset($this->SaveAcsBoxAccessElementsResult);
        } else {
            $this->SaveAcsBoxAccessElementsResult = $saveAcsBoxAccessElementsResult;
        }
        
        return $this;
    }
}
