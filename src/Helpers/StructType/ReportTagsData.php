<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportTagsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportTagsData
 * @subpackage Structs
 */
class ReportTagsData extends TagFullInfo
{
    /**
     * The ReportID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ReportID = null;
    /**
     * The TagID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TagID = null;
    /**
     * Constructor method for ReportTagsData
     * @uses ReportTagsData::setReportID()
     * @uses ReportTagsData::setTagID()
     * @param string $reportID
     * @param string $tagID
     */
    public function __construct(?string $reportID = null, ?string $tagID = null)
    {
        $this
            ->setReportID($reportID)
            ->setTagID($tagID);
    }
    /**
     * Get ReportID value
     * @return string|null
     */
    public function getReportID(): ?string
    {
        return $this->ReportID;
    }
    /**
     * Set ReportID value
     * @param string $reportID
     * @return \StructType\ReportTagsData
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
        $this->ReportID = $reportID;
        
        return $this;
    }
    /**
     * Get TagID value
     * @return string|null
     */
    public function getTagID(): ?string
    {
        return $this->TagID;
    }
    /**
     * Set TagID value
     * @param string $tagID
     * @return \StructType\ReportTagsData
     */
    public function setTagID(?string $tagID = null): self
    {
        // validation for constraint: string
        if (!is_null($tagID) && !is_string($tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tagID, true), gettype($tagID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tagID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tagID, true)), __LINE__);
        }
        $this->TagID = $tagID;
        
        return $this;
    }
}
