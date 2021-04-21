<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeyKeeperSlotsStatusResponse StructType
 * @subpackage Structs
 */
class GetKeyKeeperSlotsStatusResponse extends AbstractStructBase
{
    /**
     * The GetKeyKeeperSlotsStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CabinetStatus|null
     */
    protected ?\StructType\CabinetStatus $GetKeyKeeperSlotsStatusResult = null;
    /**
     * Constructor method for GetKeyKeeperSlotsStatusResponse
     * @uses GetKeyKeeperSlotsStatusResponse::setGetKeyKeeperSlotsStatusResult()
     * @param \StructType\CabinetStatus $getKeyKeeperSlotsStatusResult
     */
    public function __construct(?\StructType\CabinetStatus $getKeyKeeperSlotsStatusResult = null)
    {
        $this
            ->setGetKeyKeeperSlotsStatusResult($getKeyKeeperSlotsStatusResult);
    }
    /**
     * Get GetKeyKeeperSlotsStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CabinetStatus|null
     */
    public function getGetKeyKeeperSlotsStatusResult(): ?\StructType\CabinetStatus
    {
        return isset($this->GetKeyKeeperSlotsStatusResult) ? $this->GetKeyKeeperSlotsStatusResult : null;
    }
    /**
     * Set GetKeyKeeperSlotsStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CabinetStatus $getKeyKeeperSlotsStatusResult
     * @return \StructType\GetKeyKeeperSlotsStatusResponse
     */
    public function setGetKeyKeeperSlotsStatusResult(?\StructType\CabinetStatus $getKeyKeeperSlotsStatusResult = null): self
    {
        if (is_null($getKeyKeeperSlotsStatusResult) || (is_array($getKeyKeeperSlotsStatusResult) && empty($getKeyKeeperSlotsStatusResult))) {
            unset($this->GetKeyKeeperSlotsStatusResult);
        } else {
            $this->GetKeyKeeperSlotsStatusResult = $getKeyKeeperSlotsStatusResult;
        }
        
        return $this;
    }
}
