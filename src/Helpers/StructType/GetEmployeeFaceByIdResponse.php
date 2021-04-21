<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeFaceByIdResponse StructType
 * @subpackage Structs
 */
class GetEmployeeFaceByIdResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeFaceByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFaceVectorFull|null
     */
    protected ?\StructType\AcsEmployeeFaceVectorFull $GetEmployeeFaceByIdResult = null;
    /**
     * Constructor method for GetEmployeeFaceByIdResponse
     * @uses GetEmployeeFaceByIdResponse::setGetEmployeeFaceByIdResult()
     * @param \StructType\AcsEmployeeFaceVectorFull $getEmployeeFaceByIdResult
     */
    public function __construct(?\StructType\AcsEmployeeFaceVectorFull $getEmployeeFaceByIdResult = null)
    {
        $this
            ->setGetEmployeeFaceByIdResult($getEmployeeFaceByIdResult);
    }
    /**
     * Get GetEmployeeFaceByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFaceVectorFull|null
     */
    public function getGetEmployeeFaceByIdResult(): ?\StructType\AcsEmployeeFaceVectorFull
    {
        return isset($this->GetEmployeeFaceByIdResult) ? $this->GetEmployeeFaceByIdResult : null;
    }
    /**
     * Set GetEmployeeFaceByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeFaceVectorFull $getEmployeeFaceByIdResult
     * @return \StructType\GetEmployeeFaceByIdResponse
     */
    public function setGetEmployeeFaceByIdResult(?\StructType\AcsEmployeeFaceVectorFull $getEmployeeFaceByIdResult = null): self
    {
        if (is_null($getEmployeeFaceByIdResult) || (is_array($getEmployeeFaceByIdResult) && empty($getEmployeeFaceByIdResult))) {
            unset($this->GetEmployeeFaceByIdResult);
        } else {
            $this->GetEmployeeFaceByIdResult = $getEmployeeFaceByIdResult;
        }
        
        return $this;
    }
}
