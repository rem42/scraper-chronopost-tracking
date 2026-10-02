<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track ServiceType.
 */
class Track extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackESD.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\TrackESDResponse|bool
     */
    public function trackESD(\Scraper\ScraperChronopostTracking\StructType\TrackESD $parameters)
    {
        try {
            $this->setResult($resultTrackESD = $this->getSoapClient()->__soapCall('trackESD', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackESD;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackSearch.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\TrackSearchResponse|bool
     */
    public function trackSearch(\Scraper\ScraperChronopostTracking\StructType\TrackSearch $parameters)
    {
        try {
            $this->setResult($resultTrackSearch = $this->getSoapClient()->__soapCall('trackSearch', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackSearch;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackWithSenderRef.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\TrackWithSenderRefResponse|bool
     */
    public function trackWithSenderRef(\Scraper\ScraperChronopostTracking\StructType\TrackWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultTrackWithSenderRef = $this->getSoapClient()->__soapCall('trackWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackWithSenderRef;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackSkybillV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\TrackSkybillV2Response|bool
     */
    public function trackSkybillV2(\Scraper\ScraperChronopostTracking\StructType\TrackSkybillV2 $parameters)
    {
        try {
            $this->setResult($resultTrackSkybillV2 = $this->getSoapClient()->__soapCall('trackSkybillV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackSkybillV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\TrackSkybillResponse|bool
     */
    public function trackSkybill(\Scraper\ScraperChronopostTracking\StructType\TrackSkybill $parameters)
    {
        try {
            $this->setResult($resultTrackSkybill = $this->getSoapClient()->__soapCall('trackSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackSkybill;
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
     * @return \Scraper\ScraperChronopostTracking\StructType\TrackESDResponse|\Scraper\ScraperChronopostTracking\StructType\TrackSearchResponse|\Scraper\ScraperChronopostTracking\StructType\TrackSkybillResponse|\Scraper\ScraperChronopostTracking\StructType\TrackSkybillV2Response|\Scraper\ScraperChronopostTracking\StructType\TrackWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
