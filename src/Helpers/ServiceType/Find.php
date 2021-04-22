<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FindReports
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindReports $parameters
     * @return \StructType\FindReportsResponse|bool
     */
    public function FindReports(\StructType\FindReports $parameters)
    {
        try {
            $this->setResult($resultFindReports = $this->getSoapClient()->__soapCall('FindReports', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindReports;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindEmployees $parameters
     * @return \StructType\FindEmployeesResponse|bool
     */
    public function FindEmployees(\StructType\FindEmployees $parameters)
    {
        try {
            $this->setResult($resultFindEmployees = $this->getSoapClient()->__soapCall('FindEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindGroups $parameters
     * @return \StructType\FindGroupsResponse|bool
     */
    public function FindGroups(\StructType\FindGroups $parameters)
    {
        try {
            $this->setResult($resultFindGroups = $this->getSoapClient()->__soapCall('FindGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindVehicle
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindVehicle $parameters
     * @return \StructType\FindVehicleResponse|bool
     */
    public function FindVehicle(\StructType\FindVehicle $parameters)
    {
        try {
            $this->setResult($resultFindVehicle = $this->getSoapClient()->__soapCall('FindVehicle', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindVehicle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindNotify
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindNotify $parameters
     * @return \StructType\FindNotifyResponse|bool
     */
    public function FindNotify(\StructType\FindNotify $parameters)
    {
        try {
            $this->setResult($resultFindNotify = $this->getSoapClient()->__soapCall('FindNotify', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindNotify;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindViolationByEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindViolationByEmployee $parameters
     * @return \StructType\FindViolationByEmployeeResponse|bool
     */
    public function FindViolationByEmployee(\StructType\FindViolationByEmployee $parameters)
    {
        try {
            $this->setResult($resultFindViolationByEmployee = $this->getSoapClient()->__soapCall('FindViolationByEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindViolationByEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindUsbCanConverters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindUsbCanConverters $parameters
     * @return \StructType\FindUsbCanConvertersResponse|bool
     */
    public function FindUsbCanConverters(\StructType\FindUsbCanConverters $parameters)
    {
        try {
            $this->setResult($resultFindUsbCanConverters = $this->getSoapClient()->__soapCall('FindUsbCanConverters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindUsbCanConverters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindLanConverter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindLanConverter $parameters
     * @return \StructType\FindLanConverterResponse|bool
     */
    public function FindLanConverter(\StructType\FindLanConverter $parameters)
    {
        try {
            $this->setResult($resultFindLanConverter = $this->getSoapClient()->__soapCall('FindLanConverter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindLanConverter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindCanControllersViaCanConverter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindCanControllersViaCanConverter $parameters
     * @return \StructType\FindCanControllersViaCanConverterResponse|bool
     */
    public function FindCanControllersViaCanConverter(\StructType\FindCanControllersViaCanConverter $parameters)
    {
        try {
            $this->setResult($resultFindCanControllersViaCanConverter = $this->getSoapClient()->__soapCall('FindCanControllersViaCanConverter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindCanControllersViaCanConverter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\FindCanControllersViaCanConverterResponse|\StructType\FindEmployeesResponse|\StructType\FindGroupsResponse|\StructType\FindLanConverterResponse|\StructType\FindNotifyResponse|\StructType\FindReportsResponse|\StructType\FindUsbCanConvertersResponse|\StructType\FindVehicleResponse|\StructType\FindViolationByEmployeeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
