<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Save_ISS_Driver StructType
 * @subpackage Structs
 */
class Save_ISS_Driver extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Driver_SaveData|null
     */
    protected ?\StructType\ISS_Driver_SaveData $data = null;
    /**
     * Constructor method for Save_ISS_Driver
     * @uses Save_ISS_Driver::setId()
     * @uses Save_ISS_Driver::setData()
     * @param int $id
     * @param \StructType\ISS_Driver_SaveData $data
     */
    public function __construct(?int $id = null, ?\StructType\ISS_Driver_SaveData $data = null)
    {
        $this
            ->setId($id)
            ->setData($data);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\Save_ISS_Driver
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Driver_SaveData|null
     */
    public function getData(): ?\StructType\ISS_Driver_SaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ISS_Driver_SaveData $data
     * @return \StructType\Save_ISS_Driver
     */
    public function setData(?\StructType\ISS_Driver_SaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
