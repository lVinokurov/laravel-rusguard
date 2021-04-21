<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListOfViolationsByLoginResponse StructType
 * @subpackage Structs
 */
class GetListOfViolationsByLoginResponse extends AbstractStructBase
{
    /**
     * The GetListOfViolationsByLoginResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolator|null
     */
    protected ?\ArrayType\ArrayOfViolator $GetListOfViolationsByLoginResult = null;
    /**
     * Constructor method for GetListOfViolationsByLoginResponse
     * @uses GetListOfViolationsByLoginResponse::setGetListOfViolationsByLoginResult()
     * @param \ArrayType\ArrayOfViolator $getListOfViolationsByLoginResult
     */
    public function __construct(?\ArrayType\ArrayOfViolator $getListOfViolationsByLoginResult = null)
    {
        $this
            ->setGetListOfViolationsByLoginResult($getListOfViolationsByLoginResult);
    }
    /**
     * Get GetListOfViolationsByLoginResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolator|null
     */
    public function getGetListOfViolationsByLoginResult(): ?\ArrayType\ArrayOfViolator
    {
        return isset($this->GetListOfViolationsByLoginResult) ? $this->GetListOfViolationsByLoginResult : null;
    }
    /**
     * Set GetListOfViolationsByLoginResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolator $getListOfViolationsByLoginResult
     * @return \StructType\GetListOfViolationsByLoginResponse
     */
    public function setGetListOfViolationsByLoginResult(?\ArrayType\ArrayOfViolator $getListOfViolationsByLoginResult = null): self
    {
        if (is_null($getListOfViolationsByLoginResult) || (is_array($getListOfViolationsByLoginResult) && empty($getListOfViolationsByLoginResult))) {
            unset($this->GetListOfViolationsByLoginResult);
        } else {
            $this->GetListOfViolationsByLoginResult = $getListOfViolationsByLoginResult;
        }
        
        return $this;
    }
}
