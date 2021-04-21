<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ge ServiceType
 * @subpackage Services
 */
class Ge extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GeEmployeesView
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GeEmployeesView $parameters
     * @return \StructType\GeEmployeesViewResponse|bool
     */
    public function GeEmployeesView(\StructType\GeEmployeesView $parameters)
    {
        try {
            $this->setResult($resultGeEmployeesView = $this->getSoapClient()->__soapCall('GeEmployeesView', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGeEmployeesView;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeEmployeesViewMetadata
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GeEmployeesViewMetadata $parameters
     * @return \StructType\GeEmployeesViewMetadataResponse|bool
     */
    public function GeEmployeesViewMetadata(\StructType\GeEmployeesViewMetadata $parameters)
    {
        try {
            $this->setResult($resultGeEmployeesViewMetadata = $this->getSoapClient()->__soapCall('GeEmployeesViewMetadata', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGeEmployeesViewMetadata;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeFilteredtDrivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GeFilteredtDrivers $parameters
     * @return \StructType\GeFilteredtDriversResponse|bool
     */
    public function GeFilteredtDrivers(\StructType\GeFilteredtDrivers $parameters)
    {
        try {
            $this->setResult($resultGeFilteredtDrivers = $this->getSoapClient()->__soapCall('GeFilteredtDrivers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGeFilteredtDrivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GeEmployeesViewMetadataResponse|\StructType\GeEmployeesViewResponse|\StructType\GeFilteredtDriversResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
