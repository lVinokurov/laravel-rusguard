<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessPointData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AccessPointData
 * @subpackage Structs
 */
class AccessPointData extends AbstractStructBase
{
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The Points
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessPointDriverInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessPointDriverInfo $Points = null;
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalCount = null;
    /**
     * Constructor method for AccessPointData
     * @uses AccessPointData::setPageNumber()
     * @uses AccessPointData::setPageSize()
     * @uses AccessPointData::setPoints()
     * @uses AccessPointData::setTotalCount()
     * @param int $pageNumber
     * @param int $pageSize
     * @param \ArrayType\ArrayOfAcsAccessPointDriverInfo $points
     * @param int $totalCount
     */
    public function __construct(?int $pageNumber = null, ?int $pageSize = null, ?\ArrayType\ArrayOfAcsAccessPointDriverInfo $points = null, ?int $totalCount = null)
    {
        $this
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setPoints($points)
            ->setTotalCount($totalCount);
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \StructType\AccessPointData
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \StructType\AccessPointData
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get Points value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessPointDriverInfo|null
     */
    public function getPoints(): ?\ArrayType\ArrayOfAcsAccessPointDriverInfo
    {
        return isset($this->Points) ? $this->Points : null;
    }
    /**
     * Set Points value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessPointDriverInfo $points
     * @return \StructType\AccessPointData
     */
    public function setPoints(?\ArrayType\ArrayOfAcsAccessPointDriverInfo $points = null): self
    {
        if (is_null($points) || (is_array($points) && empty($points))) {
            unset($this->Points);
        } else {
            $this->Points = $points;
        }
        
        return $this;
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \StructType\AccessPointData
     */
    public function setTotalCount(?int $totalCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        
        return $this;
    }
}
