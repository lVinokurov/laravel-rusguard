<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_ISS_IIDK StructType
 * @subpackage Structs
 */
class Add_ISS_IIDK extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_IIDK_SaveData|null
     */
    protected ?\StructType\ISS_IIDK_SaveData $data = null;
    /**
     * Constructor method for Add_ISS_IIDK
     * @uses Add_ISS_IIDK::setData()
     * @param \StructType\ISS_IIDK_SaveData $data
     */
    public function __construct(?\StructType\ISS_IIDK_SaveData $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_IIDK_SaveData|null
     */
    public function getData(): ?\StructType\ISS_IIDK_SaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ISS_IIDK_SaveData $data
     * @return \StructType\Add_ISS_IIDK
     */
    public function setData(?\StructType\ISS_IIDK_SaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
