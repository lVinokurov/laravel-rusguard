<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutNotifyResponse StructType
 * @subpackage Structs
 */
class PutNotifyResponse extends AbstractStructBase
{
    /**
     * The PutNotifyResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $PutNotifyResult = null;
    /**
     * Constructor method for PutNotifyResponse
     * @uses PutNotifyResponse::setPutNotifyResult()
     * @param string $putNotifyResult
     */
    public function __construct(?string $putNotifyResult = null)
    {
        $this
            ->setPutNotifyResult($putNotifyResult);
    }
    /**
     * Get PutNotifyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPutNotifyResult(): ?string
    {
        return isset($this->PutNotifyResult) ? $this->PutNotifyResult : null;
    }
    /**
     * Set PutNotifyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $putNotifyResult
     * @return \StructType\PutNotifyResponse
     */
    public function setPutNotifyResult(?string $putNotifyResult = null): self
    {
        // validation for constraint: string
        if (!is_null($putNotifyResult) && !is_string($putNotifyResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($putNotifyResult, true), gettype($putNotifyResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($putNotifyResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $putNotifyResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($putNotifyResult, true)), __LINE__);
        }
        if (is_null($putNotifyResult) || (is_array($putNotifyResult) && empty($putNotifyResult))) {
            unset($this->PutNotifyResult);
        } else {
            $this->PutNotifyResult = $putNotifyResult;
        }
        
        return $this;
    }
}
