<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllAccessLevelsByEmployeeGroupIDResponse StructType
 * @subpackage Structs
 */
class GetAllAccessLevelsByEmployeeGroupIDResponse extends AbstractStructBase
{
    /**
     * The GetAllAccessLevelsByEmployeeGroupIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LAccessLevelsData|null
     */
    protected ?\StructType\LAccessLevelsData $GetAllAccessLevelsByEmployeeGroupIDResult = null;
    /**
     * Constructor method for GetAllAccessLevelsByEmployeeGroupIDResponse
     * @uses GetAllAccessLevelsByEmployeeGroupIDResponse::setGetAllAccessLevelsByEmployeeGroupIDResult()
     * @param \StructType\LAccessLevelsData $getAllAccessLevelsByEmployeeGroupIDResult
     */
    public function __construct(?\StructType\LAccessLevelsData $getAllAccessLevelsByEmployeeGroupIDResult = null)
    {
        $this
            ->setGetAllAccessLevelsByEmployeeGroupIDResult($getAllAccessLevelsByEmployeeGroupIDResult);
    }
    /**
     * Get GetAllAccessLevelsByEmployeeGroupIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LAccessLevelsData|null
     */
    public function getGetAllAccessLevelsByEmployeeGroupIDResult(): ?\StructType\LAccessLevelsData
    {
        return isset($this->GetAllAccessLevelsByEmployeeGroupIDResult) ? $this->GetAllAccessLevelsByEmployeeGroupIDResult : null;
    }
    /**
     * Set GetAllAccessLevelsByEmployeeGroupIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LAccessLevelsData $getAllAccessLevelsByEmployeeGroupIDResult
     * @return \StructType\GetAllAccessLevelsByEmployeeGroupIDResponse
     */
    public function setGetAllAccessLevelsByEmployeeGroupIDResult(?\StructType\LAccessLevelsData $getAllAccessLevelsByEmployeeGroupIDResult = null): self
    {
        if (is_null($getAllAccessLevelsByEmployeeGroupIDResult) || (is_array($getAllAccessLevelsByEmployeeGroupIDResult) && empty($getAllAccessLevelsByEmployeeGroupIDResult))) {
            unset($this->GetAllAccessLevelsByEmployeeGroupIDResult);
        } else {
            $this->GetAllAccessLevelsByEmployeeGroupIDResult = $getAllAccessLevelsByEmployeeGroupIDResult;
        }
        
        return $this;
    }
}
