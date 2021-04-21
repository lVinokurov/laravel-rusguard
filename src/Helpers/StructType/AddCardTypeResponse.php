<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCardTypeResponse StructType
 * @subpackage Structs
 */
class AddCardTypeResponse extends AbstractStructBase
{
    /**
     * The AddCardTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardTypeInfo|null
     */
    protected ?\StructType\CardTypeInfo $AddCardTypeResult = null;
    /**
     * Constructor method for AddCardTypeResponse
     * @uses AddCardTypeResponse::setAddCardTypeResult()
     * @param \StructType\CardTypeInfo $addCardTypeResult
     */
    public function __construct(?\StructType\CardTypeInfo $addCardTypeResult = null)
    {
        $this
            ->setAddCardTypeResult($addCardTypeResult);
    }
    /**
     * Get AddCardTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardTypeInfo|null
     */
    public function getAddCardTypeResult(): ?\StructType\CardTypeInfo
    {
        return isset($this->AddCardTypeResult) ? $this->AddCardTypeResult : null;
    }
    /**
     * Set AddCardTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CardTypeInfo $addCardTypeResult
     * @return \StructType\AddCardTypeResponse
     */
    public function setAddCardTypeResult(?\StructType\CardTypeInfo $addCardTypeResult = null): self
    {
        if (is_null($addCardTypeResult) || (is_array($addCardTypeResult) && empty($addCardTypeResult))) {
            unset($this->AddCardTypeResult);
        } else {
            $this->AddCardTypeResult = $addCardTypeResult;
        }
        
        return $this;
    }
}
