<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReportsResponse StructType
 * @subpackage Structs
 */
class FindReportsResponse extends AbstractStructBase
{
    /**
     * The FindReportsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReportSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfReportSlimInfo $FindReportsResult = null;
    /**
     * Constructor method for FindReportsResponse
     * @uses FindReportsResponse::setFindReportsResult()
     * @param \ArrayType\ArrayOfReportSlimInfo $findReportsResult
     */
    public function __construct(?\ArrayType\ArrayOfReportSlimInfo $findReportsResult = null)
    {
        $this
            ->setFindReportsResult($findReportsResult);
    }
    /**
     * Get FindReportsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReportSlimInfo|null
     */
    public function getFindReportsResult(): ?\ArrayType\ArrayOfReportSlimInfo
    {
        return isset($this->FindReportsResult) ? $this->FindReportsResult : null;
    }
    /**
     * Set FindReportsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReportSlimInfo $findReportsResult
     * @return \StructType\FindReportsResponse
     */
    public function setFindReportsResult(?\ArrayType\ArrayOfReportSlimInfo $findReportsResult = null): self
    {
        if (is_null($findReportsResult) || (is_array($findReportsResult) && empty($findReportsResult))) {
            unset($this->FindReportsResult);
        } else {
            $this->FindReportsResult = $findReportsResult;
        }
        
        return $this;
    }
}
