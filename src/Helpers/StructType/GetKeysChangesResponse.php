<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeysChangesResponse StructType
 * @subpackage Structs
 */
class GetKeysChangesResponse extends AbstractStructBase
{
    /**
     * The GetKeysChangesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LChangedKeys|null
     */
    protected ?\StructType\LChangedKeys $GetKeysChangesResult = null;
    /**
     * Constructor method for GetKeysChangesResponse
     * @uses GetKeysChangesResponse::setGetKeysChangesResult()
     * @param \StructType\LChangedKeys $getKeysChangesResult
     */
    public function __construct(?\StructType\LChangedKeys $getKeysChangesResult = null)
    {
        $this
            ->setGetKeysChangesResult($getKeysChangesResult);
    }
    /**
     * Get GetKeysChangesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LChangedKeys|null
     */
    public function getGetKeysChangesResult(): ?\StructType\LChangedKeys
    {
        return isset($this->GetKeysChangesResult) ? $this->GetKeysChangesResult : null;
    }
    /**
     * Set GetKeysChangesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LChangedKeys $getKeysChangesResult
     * @return \StructType\GetKeysChangesResponse
     */
    public function setGetKeysChangesResult(?\StructType\LChangedKeys $getKeysChangesResult = null): self
    {
        if (is_null($getKeysChangesResult) || (is_array($getKeysChangesResult) && empty($getKeysChangesResult))) {
            unset($this->GetKeysChangesResult);
        } else {
            $this->GetKeysChangesResult = $getKeysChangesResult;
        }
        
        return $this;
    }
}
