<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhotoidentificationPersonalDataResponse StructType
 * @subpackage Structs
 */
class GetPhotoidentificationPersonalDataResponse extends AbstractStructBase
{
    /**
     * The GetPhotoidentificationPersonalDataResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhotoidentificationPersonalData|null
     */
    protected ?\ArrayType\ArrayOfPhotoidentificationPersonalData $GetPhotoidentificationPersonalDataResult = null;
    /**
     * Constructor method for GetPhotoidentificationPersonalDataResponse
     * @uses GetPhotoidentificationPersonalDataResponse::setGetPhotoidentificationPersonalDataResult()
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $getPhotoidentificationPersonalDataResult
     */
    public function __construct(?\ArrayType\ArrayOfPhotoidentificationPersonalData $getPhotoidentificationPersonalDataResult = null)
    {
        $this
            ->setGetPhotoidentificationPersonalDataResult($getPhotoidentificationPersonalDataResult);
    }
    /**
     * Get GetPhotoidentificationPersonalDataResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhotoidentificationPersonalData|null
     */
    public function getGetPhotoidentificationPersonalDataResult(): ?\ArrayType\ArrayOfPhotoidentificationPersonalData
    {
        return isset($this->GetPhotoidentificationPersonalDataResult) ? $this->GetPhotoidentificationPersonalDataResult : null;
    }
    /**
     * Set GetPhotoidentificationPersonalDataResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $getPhotoidentificationPersonalDataResult
     * @return \StructType\GetPhotoidentificationPersonalDataResponse
     */
    public function setGetPhotoidentificationPersonalDataResult(?\ArrayType\ArrayOfPhotoidentificationPersonalData $getPhotoidentificationPersonalDataResult = null): self
    {
        if (is_null($getPhotoidentificationPersonalDataResult) || (is_array($getPhotoidentificationPersonalDataResult) && empty($getPhotoidentificationPersonalDataResult))) {
            unset($this->GetPhotoidentificationPersonalDataResult);
        } else {
            $this->GetPhotoidentificationPersonalDataResult = $getPhotoidentificationPersonalDataResult;
        }
        
        return $this;
    }
}
