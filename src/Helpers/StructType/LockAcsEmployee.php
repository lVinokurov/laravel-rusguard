<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LockAcsEmployee StructType
 * @subpackage Structs
 */
class LockAcsEmployee extends AbstractStructBase
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
     * The isLocked
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isLocked = null;
    /**
     * Constructor method for LockAcsEmployee
     * @uses LockAcsEmployee::setIds()
     * @uses LockAcsEmployee::setIsLocked()
     * @param \ArrayType\ArrayOfguid $ids
     * @param bool $isLocked
     */
    public function __construct(?\ArrayType\ArrayOfguid $ids = null, ?bool $isLocked = null)
    {
        $this
            ->setIds($ids)
            ->setIsLocked($isLocked);
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
     * @return \StructType\LockAcsEmployee
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
     * Get isLocked value
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     * Set isLocked value
     * @param bool $isLocked
     * @return \StructType\LockAcsEmployee
     */
    public function setIsLocked(?bool $isLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocked) && !is_bool($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->isLocked = $isLocked;
        
        return $this;
    }
}
