<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDictionaryElementResponse StructType
 * @subpackage Structs
 */
class AddDictionaryElementResponse extends AbstractStructBase
{
    /**
     * The AddDictionaryElementResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementInfo|null
     */
    protected ?\StructType\DictionaryElementInfo $AddDictionaryElementResult = null;
    /**
     * Constructor method for AddDictionaryElementResponse
     * @uses AddDictionaryElementResponse::setAddDictionaryElementResult()
     * @param \StructType\DictionaryElementInfo $addDictionaryElementResult
     */
    public function __construct(?\StructType\DictionaryElementInfo $addDictionaryElementResult = null)
    {
        $this
            ->setAddDictionaryElementResult($addDictionaryElementResult);
    }
    /**
     * Get AddDictionaryElementResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementInfo|null
     */
    public function getAddDictionaryElementResult(): ?\StructType\DictionaryElementInfo
    {
        return isset($this->AddDictionaryElementResult) ? $this->AddDictionaryElementResult : null;
    }
    /**
     * Set AddDictionaryElementResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementInfo $addDictionaryElementResult
     * @return \StructType\AddDictionaryElementResponse
     */
    public function setAddDictionaryElementResult(?\StructType\DictionaryElementInfo $addDictionaryElementResult = null): self
    {
        if (is_null($addDictionaryElementResult) || (is_array($addDictionaryElementResult) && empty($addDictionaryElementResult))) {
            unset($this->AddDictionaryElementResult);
        } else {
            $this->AddDictionaryElementResult = $addDictionaryElementResult;
        }
        
        return $this;
    }
}
