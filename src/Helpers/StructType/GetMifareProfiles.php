<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMifareProfiles StructType
 * @subpackage Structs
 */
class GetMifareProfiles extends AbstractStructBase
{
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $filter = null;
    /**
     * Constructor method for GetMifareProfiles
     * @uses GetMifareProfiles::setFilter()
     * @param array|string $filter
     */
    public function __construct($filter = [])
    {
        $this
            ->setFilter($filter);
    }
    /**
     * Get filter value
     * @return string
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterForArrayConstraintsFromSetFilter(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMifareProfilesFilterItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ProfileTypeFilter::valueIsValid($getMifareProfilesFilterItem)) {
                $invalidValues[] = is_object($getMifareProfilesFilterItem) ? get_class($getMifareProfilesFilterItem) : sprintf('%s(%s)', gettype($getMifareProfilesFilterItem), var_export($getMifareProfilesFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProfileTypeFilter', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ProfileTypeFilter::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set filter value
     * @uses \EnumType\ProfileTypeFilter::valueIsValid()
     * @uses \EnumType\ProfileTypeFilter::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $filter
     * @return \StructType\GetMifareProfiles
     */
    public function setFilter($filter = []): self
    {
        // validation for constraint: list
        if ('' !== ($filterArrayErrorMessage = self::validateFilterForArrayConstraintsFromSetFilter(is_string($filter) ? explode(' ', $filter) : $filter))) {
            throw new InvalidArgumentException($filterArrayErrorMessage, __LINE__);
        }
        $this->filter = is_array($filter) ? implode(' ', $filter) : $filter;
        
        return $this;
    }
}
