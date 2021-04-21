<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Lock ServiceType
 * @subpackage Services
 */
class Lock extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named LockAcsEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LockAcsEmployee $parameters
     * @return \StructType\LockAcsEmployeeResponse|bool
     */
    public function LockAcsEmployee(\StructType\LockAcsEmployee $parameters)
    {
        try {
            $this->setResult($resultLockAcsEmployee = $this->getSoapClient()->__soapCall('LockAcsEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLockAcsEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\LockAcsEmployeeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
