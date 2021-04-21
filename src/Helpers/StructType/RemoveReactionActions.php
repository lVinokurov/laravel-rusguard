<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveReactionActions StructType
 * @subpackage Structs
 */
class RemoveReactionActions extends AbstractStructBase
{
    /**
     * The actionIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $actionIds = null;
    /**
     * Constructor method for RemoveReactionActions
     * @uses RemoveReactionActions::setActionIds()
     * @param \ArrayType\ArrayOfguid $actionIds
     */
    public function __construct(?\ArrayType\ArrayOfguid $actionIds = null)
    {
        $this
            ->setActionIds($actionIds);
    }
    /**
     * Get actionIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getActionIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->actionIds) ? $this->actionIds : null;
    }
    /**
     * Set actionIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $actionIds
     * @return \StructType\RemoveReactionActions
     */
    public function setActionIds(?\ArrayType\ArrayOfguid $actionIds = null): self
    {
        if (is_null($actionIds) || (is_array($actionIds) && empty($actionIds))) {
            unset($this->actionIds);
        } else {
            $this->actionIds = $actionIds;
        }
        
        return $this;
    }
}
