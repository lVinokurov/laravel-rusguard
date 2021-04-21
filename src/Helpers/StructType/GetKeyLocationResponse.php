<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeyLocationResponse StructType
 * @subpackage Structs
 */
class GetKeyLocationResponse extends AbstractStructBase
{
    /**
     * The GetKeyLocationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RoomKeyInfo|null
     */
    protected ?\StructType\RoomKeyInfo $GetKeyLocationResult = null;
    /**
     * Constructor method for GetKeyLocationResponse
     * @uses GetKeyLocationResponse::setGetKeyLocationResult()
     * @param \StructType\RoomKeyInfo $getKeyLocationResult
     */
    public function __construct(?\StructType\RoomKeyInfo $getKeyLocationResult = null)
    {
        $this
            ->setGetKeyLocationResult($getKeyLocationResult);
    }
    /**
     * Get GetKeyLocationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RoomKeyInfo|null
     */
    public function getGetKeyLocationResult(): ?\StructType\RoomKeyInfo
    {
        return isset($this->GetKeyLocationResult) ? $this->GetKeyLocationResult : null;
    }
    /**
     * Set GetKeyLocationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\RoomKeyInfo $getKeyLocationResult
     * @return \StructType\GetKeyLocationResponse
     */
    public function setGetKeyLocationResult(?\StructType\RoomKeyInfo $getKeyLocationResult = null): self
    {
        if (is_null($getKeyLocationResult) || (is_array($getKeyLocationResult) && empty($getKeyLocationResult))) {
            unset($this->GetKeyLocationResult);
        } else {
            $this->GetKeyLocationResult = $getKeyLocationResult;
        }
        
        return $this;
    }
}
