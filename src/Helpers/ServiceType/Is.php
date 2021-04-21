<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named IsAdmin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\IsAdmin $parameters
     * @return \StructType\IsAdminResponse|bool
     */
    public function IsAdmin(\StructType\IsAdmin $parameters)
    {
        try {
            $this->setResult($resultIsAdmin = $this->getSoapClient()->__soapCall('IsAdmin', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsAdmin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named IsSessionExists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\IsSessionExists $parameters
     * @return \StructType\IsSessionExistsResponse|bool
     */
    public function IsSessionExists(\StructType\IsSessionExists $parameters)
    {
        try {
            $this->setResult($resultIsSessionExists = $this->getSoapClient()->__soapCall('IsSessionExists', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsSessionExists;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\IsAdminResponse|\StructType\IsSessionExistsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
