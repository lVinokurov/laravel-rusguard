<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLevelsByDriverIDResponse StructType
 * @subpackage Structs
 */
class GetAccessLevelsByDriverIDResponse extends AbstractStructBase
{
    /**
     * The GetAccessLevelsByDriverIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessLevelSimpleInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessLevelSimpleInfo $GetAccessLevelsByDriverIDResult = null;
    /**
     * Constructor method for GetAccessLevelsByDriverIDResponse
     * @uses GetAccessLevelsByDriverIDResponse::setGetAccessLevelsByDriverIDResult()
     * @param \ArrayType\ArrayOfAcsAccessLevelSimpleInfo $getAccessLevelsByDriverIDResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsAccessLevelSimpleInfo $getAccessLevelsByDriverIDResult = null)
    {
        $this
            ->setGetAccessLevelsByDriverIDResult($getAccessLevelsByDriverIDResult);
    }
    /**
     * Get GetAccessLevelsByDriverIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessLevelSimpleInfo|null
     */
    public function getGetAccessLevelsByDriverIDResult(): ?\ArrayType\ArrayOfAcsAccessLevelSimpleInfo
    {
        return isset($this->GetAccessLevelsByDriverIDResult) ? $this->GetAccessLevelsByDriverIDResult : null;
    }
    /**
     * Set GetAccessLevelsByDriverIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessLevelSimpleInfo $getAccessLevelsByDriverIDResult
     * @return \StructType\GetAccessLevelsByDriverIDResponse
     */
    public function setGetAccessLevelsByDriverIDResult(?\ArrayType\ArrayOfAcsAccessLevelSimpleInfo $getAccessLevelsByDriverIDResult = null): self
    {
        if (is_null($getAccessLevelsByDriverIDResult) || (is_array($getAccessLevelsByDriverIDResult) && empty($getAccessLevelsByDriverIDResult))) {
            unset($this->GetAccessLevelsByDriverIDResult);
        } else {
            $this->GetAccessLevelsByDriverIDResult = $getAccessLevelsByDriverIDResult;
        }
        
        return $this;
    }
}
