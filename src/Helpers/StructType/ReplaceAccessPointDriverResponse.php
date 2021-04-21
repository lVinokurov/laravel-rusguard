<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReplaceAccessPointDriverResponse StructType
 * @subpackage Structs
 */
class ReplaceAccessPointDriverResponse extends AbstractStructBase
{
    /**
     * The ReplaceAccessPointDriverResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointSlimInfo|null
     */
    protected ?\StructType\AcsAccessPointSlimInfo $ReplaceAccessPointDriverResult = null;
    /**
     * Constructor method for ReplaceAccessPointDriverResponse
     * @uses ReplaceAccessPointDriverResponse::setReplaceAccessPointDriverResult()
     * @param \StructType\AcsAccessPointSlimInfo $replaceAccessPointDriverResult
     */
    public function __construct(?\StructType\AcsAccessPointSlimInfo $replaceAccessPointDriverResult = null)
    {
        $this
            ->setReplaceAccessPointDriverResult($replaceAccessPointDriverResult);
    }
    /**
     * Get ReplaceAccessPointDriverResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function getReplaceAccessPointDriverResult(): ?\StructType\AcsAccessPointSlimInfo
    {
        return isset($this->ReplaceAccessPointDriverResult) ? $this->ReplaceAccessPointDriverResult : null;
    }
    /**
     * Set ReplaceAccessPointDriverResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessPointSlimInfo $replaceAccessPointDriverResult
     * @return \StructType\ReplaceAccessPointDriverResponse
     */
    public function setReplaceAccessPointDriverResult(?\StructType\AcsAccessPointSlimInfo $replaceAccessPointDriverResult = null): self
    {
        if (is_null($replaceAccessPointDriverResult) || (is_array($replaceAccessPointDriverResult) && empty($replaceAccessPointDriverResult))) {
            unset($this->ReplaceAccessPointDriverResult);
        } else {
            $this->ReplaceAccessPointDriverResult = $replaceAccessPointDriverResult;
        }
        
        return $this;
    }
}
