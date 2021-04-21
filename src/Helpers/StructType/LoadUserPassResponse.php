<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadUserPassResponse StructType
 * @subpackage Structs
 */
class LoadUserPassResponse extends AbstractStructBase
{
    /**
     * The LoadUserPassResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UserPassFullData|null
     */
    protected ?\StructType\UserPassFullData $LoadUserPassResult = null;
    /**
     * Constructor method for LoadUserPassResponse
     * @uses LoadUserPassResponse::setLoadUserPassResult()
     * @param \StructType\UserPassFullData $loadUserPassResult
     */
    public function __construct(?\StructType\UserPassFullData $loadUserPassResult = null)
    {
        $this
            ->setLoadUserPassResult($loadUserPassResult);
    }
    /**
     * Get LoadUserPassResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UserPassFullData|null
     */
    public function getLoadUserPassResult(): ?\StructType\UserPassFullData
    {
        return isset($this->LoadUserPassResult) ? $this->LoadUserPassResult : null;
    }
    /**
     * Set LoadUserPassResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\UserPassFullData $loadUserPassResult
     * @return \StructType\LoadUserPassResponse
     */
    public function setLoadUserPassResult(?\StructType\UserPassFullData $loadUserPassResult = null): self
    {
        if (is_null($loadUserPassResult) || (is_array($loadUserPassResult) && empty($loadUserPassResult))) {
            unset($this->LoadUserPassResult);
        } else {
            $this->LoadUserPassResult = $loadUserPassResult;
        }
        
        return $this;
    }
}
