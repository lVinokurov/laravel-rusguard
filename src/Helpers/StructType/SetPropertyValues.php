<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPropertyValues StructType
 * @subpackage Structs
 */
class SetPropertyValues extends AbstractStructBase
{
    /**
     * The resources
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourcePropertyValues|null
     */
    protected ?\ArrayType\ArrayOfLResourcePropertyValues $resources = null;
    /**
     * Constructor method for SetPropertyValues
     * @uses SetPropertyValues::setResources()
     * @param \ArrayType\ArrayOfLResourcePropertyValues $resources
     */
    public function __construct(?\ArrayType\ArrayOfLResourcePropertyValues $resources = null)
    {
        $this
            ->setResources($resources);
    }
    /**
     * Get resources value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourcePropertyValues|null
     */
    public function getResources(): ?\ArrayType\ArrayOfLResourcePropertyValues
    {
        return isset($this->resources) ? $this->resources : null;
    }
    /**
     * Set resources value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourcePropertyValues $resources
     * @return \StructType\SetPropertyValues
     */
    public function setResources(?\ArrayType\ArrayOfLResourcePropertyValues $resources = null): self
    {
        if (is_null($resources) || (is_array($resources) && empty($resources))) {
            unset($this->resources);
        } else {
            $this->resources = $resources;
        }
        
        return $this;
    }
}
