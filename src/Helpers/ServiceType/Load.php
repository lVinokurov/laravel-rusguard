<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Load ServiceType
 * @subpackage Services
 */
class Load extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named LoadUserPass
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadUserPass $parameters
     * @return \StructType\LoadUserPassResponse|bool
     */
    public function LoadUserPass(\StructType\LoadUserPass $parameters)
    {
        try {
            $this->setResult($resultLoadUserPass = $this->getSoapClient()->__soapCall('LoadUserPass', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadUserPass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadPanasonicConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadPanasonicConfiguration $parameters
     * @return \StructType\LoadPanasonicConfigurationResponse|bool
     */
    public function LoadPanasonicConfiguration(\StructType\LoadPanasonicConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadPanasonicConfiguration = $this->getSoapClient()->__soapCall('LoadPanasonicConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadPanasonicConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * LoadNTechLabRecognitionServiceConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadNTechLabRecognitionServiceConfiguration $parameters
     * @return \StructType\LoadNTechLabRecognitionServiceConfigurationResponse|bool
     */
    public function LoadNTechLabRecognitionServiceConfiguration(\StructType\LoadNTechLabRecognitionServiceConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadNTechLabRecognitionServiceConfiguration = $this->getSoapClient()->__soapCall('LoadNTechLabRecognitionServiceConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadNTechLabRecognitionServiceConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadKeyKeeperServiceConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadKeyKeeperServiceConfiguration $parameters
     * @return \StructType\LoadKeyKeeperServiceConfigurationResponse|bool
     */
    public function LoadKeyKeeperServiceConfiguration(\StructType\LoadKeyKeeperServiceConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadKeyKeeperServiceConfiguration = $this->getSoapClient()->__soapCall('LoadKeyKeeperServiceConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadKeyKeeperServiceConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadNUUOConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadNUUOConfiguration $parameters
     * @return \StructType\LoadNUUOConfigurationResponse|bool
     */
    public function LoadNUUOConfiguration(\StructType\LoadNUUOConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadNUUOConfiguration = $this->getSoapClient()->__soapCall('LoadNUUOConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadNUUOConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadTrassirConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadTrassirConfiguration $parameters
     * @return \StructType\LoadTrassirConfigurationResponse|bool
     */
    public function LoadTrassirConfiguration(\StructType\LoadTrassirConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadTrassirConfiguration = $this->getSoapClient()->__soapCall('LoadTrassirConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadTrassirConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadServerConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadServerConfiguration $parameters
     * @return \StructType\LoadServerConfigurationResponse|bool
     */
    public function LoadServerConfiguration(\StructType\LoadServerConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadServerConfiguration = $this->getSoapClient()->__soapCall('LoadServerConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadServerConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadPersonalCabinetConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoadPersonalCabinetConfiguration $parameters
     * @return \StructType\LoadPersonalCabinetConfigurationResponse|bool
     */
    public function LoadPersonalCabinetConfiguration(\StructType\LoadPersonalCabinetConfiguration $parameters)
    {
        try {
            $this->setResult($resultLoadPersonalCabinetConfiguration = $this->getSoapClient()->__soapCall('LoadPersonalCabinetConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadPersonalCabinetConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\LoadKeyKeeperServiceConfigurationResponse|\StructType\LoadNTechLabRecognitionServiceConfigurationResponse|\StructType\LoadNUUOConfigurationResponse|\StructType\LoadPanasonicConfigurationResponse|\StructType\LoadPersonalCabinetConfigurationResponse|\StructType\LoadServerConfigurationResponse|\StructType\LoadTrassirConfigurationResponse|\StructType\LoadUserPassResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
