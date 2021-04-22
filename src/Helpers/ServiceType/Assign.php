<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Assign ServiceType
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AssignAcsKeyForEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AssignAcsKeyForEmployee $parameters
     * @return \StructType\AssignAcsKeyForEmployeeResponse|bool
     */
    public function AssignAcsKeyForEmployee(\StructType\AssignAcsKeyForEmployee $parameters)
    {
        try {
            $this->setResult($resultAssignAcsKeyForEmployee = $this->getSoapClient()->__soapCall('AssignAcsKeyForEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAssignAcsKeyForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AssignAcsKeyForEmployeeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
