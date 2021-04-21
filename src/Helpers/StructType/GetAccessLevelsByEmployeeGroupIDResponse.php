<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLevelsByEmployeeGroupIDResponse StructType
 * @subpackage Structs
 */
class GetAccessLevelsByEmployeeGroupIDResponse extends AbstractStructBase
{
    /**
     * The GetAccessLevelsByEmployeeGroupIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LAccessLevelsData|null
     */
    protected ?\StructType\LAccessLevelsData $GetAccessLevelsByEmployeeGroupIDResult = null;
    /**
     * Constructor method for GetAccessLevelsByEmployeeGroupIDResponse
     * @uses GetAccessLevelsByEmployeeGroupIDResponse::setGetAccessLevelsByEmployeeGroupIDResult()
     * @param \StructType\LAccessLevelsData $getAccessLevelsByEmployeeGroupIDResult
     */
    public function __construct(?\StructType\LAccessLevelsData $getAccessLevelsByEmployeeGroupIDResult = null)
    {
        $this
            ->setGetAccessLevelsByEmployeeGroupIDResult($getAccessLevelsByEmployeeGroupIDResult);
    }
    /**
     * Get GetAccessLevelsByEmployeeGroupIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LAccessLevelsData|null
     */
    public function getGetAccessLevelsByEmployeeGroupIDResult(): ?\StructType\LAccessLevelsData
    {
        return isset($this->GetAccessLevelsByEmployeeGroupIDResult) ? $this->GetAccessLevelsByEmployeeGroupIDResult : null;
    }
    /**
     * Set GetAccessLevelsByEmployeeGroupIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LAccessLevelsData $getAccessLevelsByEmployeeGroupIDResult
     * @return \StructType\GetAccessLevelsByEmployeeGroupIDResponse
     */
    public function setGetAccessLevelsByEmployeeGroupIDResult(?\StructType\LAccessLevelsData $getAccessLevelsByEmployeeGroupIDResult = null): self
    {
        if (is_null($getAccessLevelsByEmployeeGroupIDResult) || (is_array($getAccessLevelsByEmployeeGroupIDResult) && empty($getAccessLevelsByEmployeeGroupIDResult))) {
            unset($this->GetAccessLevelsByEmployeeGroupIDResult);
        } else {
            $this->GetAccessLevelsByEmployeeGroupIDResult = $getAccessLevelsByEmployeeGroupIDResult;
        }
        
        return $this;
    }
}
