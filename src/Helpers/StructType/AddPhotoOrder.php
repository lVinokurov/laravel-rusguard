<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddPhotoOrder StructType
 * @subpackage Structs
 */
class AddPhotoOrder extends AbstractStructBase
{
    /**
     * The photoOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoOrder|null
     */
    protected ?\StructType\PhotoOrder $photoOrder = null;
    /**
     * Constructor method for AddPhotoOrder
     * @uses AddPhotoOrder::setPhotoOrder()
     * @param \StructType\PhotoOrder $photoOrder
     */
    public function __construct(?\StructType\PhotoOrder $photoOrder = null)
    {
        $this
            ->setPhotoOrder($photoOrder);
    }
    /**
     * Get photoOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoOrder|null
     */
    public function getPhotoOrder(): ?\StructType\PhotoOrder
    {
        return isset($this->photoOrder) ? $this->photoOrder : null;
    }
    /**
     * Set photoOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhotoOrder $photoOrder
     * @return \StructType\AddPhotoOrder
     */
    public function setPhotoOrder(?\StructType\PhotoOrder $photoOrder = null): self
    {
        if (is_null($photoOrder) || (is_array($photoOrder) && empty($photoOrder))) {
            unset($this->photoOrder);
        } else {
            $this->photoOrder = $photoOrder;
        }
        
        return $this;
    }
}
