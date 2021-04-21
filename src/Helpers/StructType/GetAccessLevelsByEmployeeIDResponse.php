<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLevelsByEmployeeIDResponse StructType
 * @subpackage Structs
 */
class GetAccessLevelsByEmployeeIDResponse extends AbstractStructBase
{
    /**
     * The GetAccessLevelsByEmployeeIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LAccessLevelsData|null
     */
    protected ?\StructType\LAccessLevelsData $GetAccessLevelsByEmployeeIDResult = null;
    /**
     * Constructor method for GetAccessLevelsByEmployeeIDResponse
     * @uses GetAccessLevelsByEmployeeIDResponse::setGetAccessLevelsByEmployeeIDResult()
     * @param \StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDResult
     */
    public function __construct(?\StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDResult = null)
    {
        $this
            ->setGetAccessLevelsByEmployeeIDResult($getAccessLevelsByEmployeeIDResult);
    }
    /**
     * Get GetAccessLevelsByEmployeeIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LAccessLevelsData|null
     */
    public function getGetAccessLevelsByEmployeeIDResult(): ?\StructType\LAccessLevelsData
    {
        return isset($this->GetAccessLevelsByEmployeeIDResult) ? $this->GetAccessLevelsByEmployeeIDResult : null;
    }
    /**
     * Set GetAccessLevelsByEmployeeIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDResult
     * @return \StructType\GetAccessLevelsByEmployeeIDResponse
     */
    public function setGetAccessLevelsByEmployeeIDResult(?\StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDResult = null): self
    {
        if (is_null($getAccessLevelsByEmployeeIDResult) || (is_array($getAccessLevelsByEmployeeIDResult) && empty($getAccessLevelsByEmployeeIDResult))) {
            unset($this->GetAccessLevelsByEmployeeIDResult);
        } else {
            $this->GetAccessLevelsByEmployeeIDResult = $getAccessLevelsByEmployeeIDResult;
        }
        
        return $this;
    }
}
