<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessSyncDriver StructType
 * @subpackage Structs
 */
class ProcessSyncDriver extends AbstractStructBase
{
    /**
     * The processDriverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $processDriverID = null;
    /**
     * The connectionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $connectionId = null;
    /**
     * The driverIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $driverIDs = null;
    /**
     * The processingData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $processingData = null;
    /**
     * Constructor method for ProcessSyncDriver
     * @uses ProcessSyncDriver::setProcessDriverID()
     * @uses ProcessSyncDriver::setConnectionId()
     * @uses ProcessSyncDriver::setDriverIDs()
     * @uses ProcessSyncDriver::setProcessingData()
     * @param string $processDriverID
     * @param string $connectionId
     * @param \ArrayType\ArrayOfguid $driverIDs
     * @param array|string $processingData
     */
    public function __construct(?string $processDriverID = null, ?string $connectionId = null, ?\ArrayType\ArrayOfguid $driverIDs = null, $processingData = [])
    {
        $this
            ->setProcessDriverID($processDriverID)
            ->setConnectionId($connectionId)
            ->setDriverIDs($driverIDs)
            ->setProcessingData($processingData);
    }
    /**
     * Get processDriverID value
     * @return string|null
     */
    public function getProcessDriverID(): ?string
    {
        return $this->processDriverID;
    }
    /**
     * Set processDriverID value
     * @param string $processDriverID
     * @return \StructType\ProcessSyncDriver
     */
    public function setProcessDriverID(?string $processDriverID = null): self
    {
        // validation for constraint: string
        if (!is_null($processDriverID) && !is_string($processDriverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processDriverID, true), gettype($processDriverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($processDriverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $processDriverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($processDriverID, true)), __LINE__);
        }
        $this->processDriverID = $processDriverID;
        
        return $this;
    }
    /**
     * Get connectionId value
     * @return string|null
     */
    public function getConnectionId(): ?string
    {
        return $this->connectionId;
    }
    /**
     * Set connectionId value
     * @param string $connectionId
     * @return \StructType\ProcessSyncDriver
     */
    public function setConnectionId(?string $connectionId = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionId) && !is_string($connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionId, true), gettype($connectionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($connectionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($connectionId, true)), __LINE__);
        }
        $this->connectionId = $connectionId;
        
        return $this;
    }
    /**
     * Get driverIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDriverIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->driverIDs) ? $this->driverIDs : null;
    }
    /**
     * Set driverIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $driverIDs
     * @return \StructType\ProcessSyncDriver
     */
    public function setDriverIDs(?\ArrayType\ArrayOfguid $driverIDs = null): self
    {
        if (is_null($driverIDs) || (is_array($driverIDs) && empty($driverIDs))) {
            unset($this->driverIDs);
        } else {
            $this->driverIDs = $driverIDs;
        }
        
        return $this;
    }
    /**
     * Get processingData value
     * @return string
     */
    public function getProcessingData(): ?string
    {
        return $this->processingData;
    }
    /**
     * This method is responsible for validating the values passed to the setProcessingData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProcessingData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProcessingDataForArrayConstraintsFromSetProcessingData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processSyncDriverProcessingDataItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ProcessingData::valueIsValid($processSyncDriverProcessingDataItem)) {
                $invalidValues[] = is_object($processSyncDriverProcessingDataItem) ? get_class($processSyncDriverProcessingDataItem) : sprintf('%s(%s)', gettype($processSyncDriverProcessingDataItem), var_export($processSyncDriverProcessingDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProcessingData', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ProcessingData::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set processingData value
     * @uses \EnumType\ProcessingData::valueIsValid()
     * @uses \EnumType\ProcessingData::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $processingData
     * @return \StructType\ProcessSyncDriver
     */
    public function setProcessingData($processingData = []): self
    {
        // validation for constraint: list
        if ('' !== ($processingDataArrayErrorMessage = self::validateProcessingDataForArrayConstraintsFromSetProcessingData(is_string($processingData) ? explode(' ', $processingData) : $processingData))) {
            throw new InvalidArgumentException($processingDataArrayErrorMessage, __LINE__);
        }
        $this->processingData = is_array($processingData) ? implode(' ', $processingData) : $processingData;
        
        return $this;
    }
}
