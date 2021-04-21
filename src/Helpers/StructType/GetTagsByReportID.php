<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByReportID StructType
 * @subpackage Structs
 */
class GetTagsByReportID extends AbstractStructBase
{
    /**
     * The reportID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $reportID = null;
    /**
     * Constructor method for GetTagsByReportID
     * @uses GetTagsByReportID::setReportID()
     * @param string $reportID
     */
    public function __construct(?string $reportID = null)
    {
        $this
            ->setReportID($reportID);
    }
    /**
     * Get reportID value
     * @return string|null
     */
    public function getReportID(): ?string
    {
        return $this->reportID;
    }
    /**
     * Set reportID value
     * @param string $reportID
     * @return \StructType\GetTagsByReportID
     */
    public function setReportID(?string $reportID = null): self
    {
        // validation for constraint: string
        if (!is_null($reportID) && !is_string($reportID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportID, true), gettype($reportID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($reportID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $reportID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($reportID, true)), __LINE__);
        }
        $this->reportID = $reportID;
        
        return $this;
    }
}
