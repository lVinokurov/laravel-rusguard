<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemovePhoneNumbers StructType
 * @subpackage Structs
 */
class RemovePhoneNumbers extends AbstractStructBase
{
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $ids = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for RemovePhoneNumbers
     * @uses RemovePhoneNumbers::setIds()
     * @uses RemovePhoneNumbers::setPartOfCreateOperation()
     * @param \ArrayType\ArrayOfguid $ids
     * @param bool $partOfCreateOperation
     */
    public function __construct(?\ArrayType\ArrayOfguid $ids = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setIds($ids)
            ->setPartOfCreateOperation($partOfCreateOperation);
    }
    /**
     * Get ids value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->ids) ? $this->ids : null;
    }
    /**
     * Set ids value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $ids
     * @return \StructType\RemovePhoneNumbers
     */
    public function setIds(?\ArrayType\ArrayOfguid $ids = null): self
    {
        if (is_null($ids) || (is_array($ids) && empty($ids))) {
            unset($this->ids);
        } else {
            $this->ids = $ids;
        }
        
        return $this;
    }
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\RemovePhoneNumbers
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
}
