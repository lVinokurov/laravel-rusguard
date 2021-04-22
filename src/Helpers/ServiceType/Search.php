<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SearchEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SearchEmployee $parameters
     * @return \StructType\SearchEmployeeResponse|bool
     */
    public function SearchEmployee(\StructType\SearchEmployee $parameters)
    {
        try {
            $this->setResult($resultSearchEmployee = $this->getSoapClient()->__soapCall('SearchEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchFirebirdIncidents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SearchFirebirdIncidents $parameters
     * @return \StructType\SearchFirebirdIncidentsResponse|bool
     */
    public function SearchFirebirdIncidents(\StructType\SearchFirebirdIncidents $parameters)
    {
        try {
            $this->setResult($resultSearchFirebirdIncidents = $this->getSoapClient()->__soapCall('SearchFirebirdIncidents', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchFirebirdIncidents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SearchEmployeeResponse|\StructType\SearchFirebirdIncidentsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
