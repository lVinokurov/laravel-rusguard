<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMifareProfilesFullInfoResponse StructType
 * @subpackage Structs
 */
class GetMifareProfilesFullInfoResponse extends AbstractStructBase
{
    /**
     * The GetMifareProfilesFullInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MifareProfileFullInfo|null
     */
    protected ?\StructType\MifareProfileFullInfo $GetMifareProfilesFullInfoResult = null;
    /**
     * Constructor method for GetMifareProfilesFullInfoResponse
     * @uses GetMifareProfilesFullInfoResponse::setGetMifareProfilesFullInfoResult()
     * @param \StructType\MifareProfileFullInfo $getMifareProfilesFullInfoResult
     */
    public function __construct(?\StructType\MifareProfileFullInfo $getMifareProfilesFullInfoResult = null)
    {
        $this
            ->setGetMifareProfilesFullInfoResult($getMifareProfilesFullInfoResult);
    }
    /**
     * Get GetMifareProfilesFullInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MifareProfileFullInfo|null
     */
    public function getGetMifareProfilesFullInfoResult(): ?\StructType\MifareProfileFullInfo
    {
        return isset($this->GetMifareProfilesFullInfoResult) ? $this->GetMifareProfilesFullInfoResult : null;
    }
    /**
     * Set GetMifareProfilesFullInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MifareProfileFullInfo $getMifareProfilesFullInfoResult
     * @return \StructType\GetMifareProfilesFullInfoResponse
     */
    public function setGetMifareProfilesFullInfoResult(?\StructType\MifareProfileFullInfo $getMifareProfilesFullInfoResult = null): self
    {
        if (is_null($getMifareProfilesFullInfoResult) || (is_array($getMifareProfilesFullInfoResult) && empty($getMifareProfilesFullInfoResult))) {
            unset($this->GetMifareProfilesFullInfoResult);
        } else {
            $this->GetMifareProfilesFullInfoResult = $getMifareProfilesFullInfoResult;
        }
        
        return $this;
    }
}
