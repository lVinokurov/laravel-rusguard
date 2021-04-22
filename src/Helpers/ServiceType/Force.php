<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Force ServiceType
 * @subpackage Services
 */
class Force extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ForceAssignAcsKeyForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ForceAssignAcsKeyForEmployee $parameters
     * @return \StructType\ForceAssignAcsKeyForEmployeeResponse|bool
     */
    public function ForceAssignAcsKeyForEmployee(\StructType\ForceAssignAcsKeyForEmployee $parameters)
    {
        try {
            $this->setResult($resultForceAssignAcsKeyForEmployee = $this->getSoapClient()->__soapCall('ForceAssignAcsKeyForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultForceAssignAcsKeyForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ForceAssignAcsKeyForEmployeeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
