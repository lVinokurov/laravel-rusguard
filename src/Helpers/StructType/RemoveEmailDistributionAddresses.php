<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveEmailDistributionAddresses StructType
 * @subpackage Structs
 */
class RemoveEmailDistributionAddresses extends AbstractStructBase
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
     * Constructor method for RemoveEmailDistributionAddresses
     * @uses RemoveEmailDistributionAddresses::setIds()
     * @param \ArrayType\ArrayOfguid $ids
     */
    public function __construct(?\ArrayType\ArrayOfguid $ids = null)
    {
        $this
            ->setIds($ids);
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
     * @return \StructType\RemoveEmailDistributionAddresses
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
}
