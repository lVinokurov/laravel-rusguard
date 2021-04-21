<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAbscenceInWorkplaceResponse StructType
 * @subpackage Structs
 */
class GetAbscenceInWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetAbscenceInWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAbsent|null
     */
    protected ?\ArrayType\ArrayOfAbsent $GetAbscenceInWorkplaceResult = null;
    /**
     * Constructor method for GetAbscenceInWorkplaceResponse
     * @uses GetAbscenceInWorkplaceResponse::setGetAbscenceInWorkplaceResult()
     * @param \ArrayType\ArrayOfAbsent $getAbscenceInWorkplaceResult
     */
    public function __construct(?\ArrayType\ArrayOfAbsent $getAbscenceInWorkplaceResult = null)
    {
        $this
            ->setGetAbscenceInWorkplaceResult($getAbscenceInWorkplaceResult);
    }
    /**
     * Get GetAbscenceInWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAbsent|null
     */
    public function getGetAbscenceInWorkplaceResult(): ?\ArrayType\ArrayOfAbsent
    {
        return isset($this->GetAbscenceInWorkplaceResult) ? $this->GetAbscenceInWorkplaceResult : null;
    }
    /**
     * Set GetAbscenceInWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAbsent $getAbscenceInWorkplaceResult
     * @return \StructType\GetAbscenceInWorkplaceResponse
     */
    public function setGetAbscenceInWorkplaceResult(?\ArrayType\ArrayOfAbsent $getAbscenceInWorkplaceResult = null): self
    {
        if (is_null($getAbscenceInWorkplaceResult) || (is_array($getAbscenceInWorkplaceResult) && empty($getAbscenceInWorkplaceResult))) {
            unset($this->GetAbscenceInWorkplaceResult);
        } else {
            $this->GetAbscenceInWorkplaceResult = $getAbscenceInWorkplaceResult;
        }
        
        return $this;
    }
}
