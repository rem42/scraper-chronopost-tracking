<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType.
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelListSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\CancelListSkybillResponse|bool
     */
    public function cancelListSkybill(\Scraper\ScraperChronopostTracking\StructType\CancelListSkybill $parameters)
    {
        try {
            $this->setResult($resultCancelListSkybill = $this->getSoapClient()->__soapCall('cancelListSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCancelListSkybill;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named cancelSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\CancelSkybillResponse|bool
     */
    public function cancelSkybill(\Scraper\ScraperChronopostTracking\StructType\CancelSkybill $parameters)
    {
        try {
            $this->setResult($resultCancelSkybill = $this->getSoapClient()->__soapCall('cancelSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCancelSkybill;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\CancelListSkybillResponse|\Scraper\ScraperChronopostTracking\StructType\CancelSkybillResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
