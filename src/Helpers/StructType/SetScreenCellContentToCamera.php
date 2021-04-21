<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetScreenCellContentToCamera StructType
 * @subpackage Structs
 */
class SetScreenCellContentToCamera extends AbstractStructBase
{
    /**
     * The cellId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $cellId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CellContentCameraSaveData|null
     */
    protected ?\StructType\CellContentCameraSaveData $data = null;
    /**
     * Constructor method for SetScreenCellContentToCamera
     * @uses SetScreenCellContentToCamera::setCellId()
     * @uses SetScreenCellContentToCamera::setData()
     * @param string $cellId
     * @param \StructType\CellContentCameraSaveData $data
     */
    public function __construct(?string $cellId = null, ?\StructType\CellContentCameraSaveData $data = null)
    {
        $this
            ->setCellId($cellId)
            ->setData($data);
    }
    /**
     * Get cellId value
     * @return string|null
     */
    public function getCellId(): ?string
    {
        return $this->cellId;
    }
    /**
     * Set cellId value
     * @param string $cellId
     * @return \StructType\SetScreenCellContentToCamera
     */
    public function setCellId(?string $cellId = null): self
    {
        // validation for constraint: string
        if (!is_null($cellId) && !is_string($cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cellId, true), gettype($cellId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cellId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cellId, true)), __LINE__);
        }
        $this->cellId = $cellId;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CellContentCameraSaveData|null
     */
    public function getData(): ?\StructType\CellContentCameraSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CellContentCameraSaveData $data
     * @return \StructType\SetScreenCellContentToCamera
     */
    public function setData(?\StructType\CellContentCameraSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
