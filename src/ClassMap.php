<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking;

/**
 * Class which returns the class map definition.
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS.
     *
     * @return array<string>
     */
    final public static function get(): array
    {
        return [
            'cancelListSkybill' => '\Scraper\ScraperChronopostTracking\StructType\CancelListSkybill',
            'cancelListSkybillResponse' => '\Scraper\ScraperChronopostTracking\StructType\CancelListSkybillResponse',
            'resultListCancelSkybill' => '\Scraper\ScraperChronopostTracking\StructType\ResultListCancelSkybill',
            'trackESD' => '\Scraper\ScraperChronopostTracking\StructType\TrackESD',
            'trackESDResponse' => '\Scraper\ScraperChronopostTracking\StructType\TrackESDResponse',
            'resultTrackSkybillV2' => '\Scraper\ScraperChronopostTracking\StructType\ResultTrackSkybillV2',
            'listEventInfoComps' => '\Scraper\ScraperChronopostTracking\StructType\ListEventInfoComps',
            'eventInfoComp' => '\Scraper\ScraperChronopostTracking\StructType\EventInfoComp',
            'event' => '\Scraper\ScraperChronopostTracking\StructType\Event',
            'infoComp' => '\Scraper\ScraperChronopostTracking\StructType\InfoComp',
            'trackSearch' => '\Scraper\ScraperChronopostTracking\StructType\TrackSearch',
            'trackSearchResponse' => '\Scraper\ScraperChronopostTracking\StructType\TrackSearchResponse',
            'resultTrackSearch' => '\Scraper\ScraperChronopostTracking\StructType\ResultTrackSearch',
            'infosPOD' => '\Scraper\ScraperChronopostTracking\StructType\InfosPOD',
            'searchPOD' => '\Scraper\ScraperChronopostTracking\StructType\SearchPOD',
            'searchPODResponse' => '\Scraper\ScraperChronopostTracking\StructType\SearchPODResponse',
            'resultSearchPOD' => '\Scraper\ScraperChronopostTracking\StructType\ResultSearchPOD',
            'cancelSkybill' => '\Scraper\ScraperChronopostTracking\StructType\CancelSkybill',
            'cancelSkybillResponse' => '\Scraper\ScraperChronopostTracking\StructType\CancelSkybillResponse',
            'resultCancelSkybill' => '\Scraper\ScraperChronopostTracking\StructType\ResultCancelSkybill',
            'trackWithSenderRef' => '\Scraper\ScraperChronopostTracking\StructType\TrackWithSenderRef',
            'trackWithSenderRefResponse' => '\Scraper\ScraperChronopostTracking\StructType\TrackWithSenderRefResponse',
            'resultTrackWithSenderRef' => '\Scraper\ScraperChronopostTracking\StructType\ResultTrackWithSenderRef',
            'listEvents' => '\Scraper\ScraperChronopostTracking\StructType\ListEvents',
            'trackSkybillV2' => '\Scraper\ScraperChronopostTracking\StructType\TrackSkybillV2',
            'trackSkybillV2Response' => '\Scraper\ScraperChronopostTracking\StructType\TrackSkybillV2Response',
            'trackSkybill' => '\Scraper\ScraperChronopostTracking\StructType\TrackSkybill',
            'trackSkybillResponse' => '\Scraper\ScraperChronopostTracking\StructType\TrackSkybillResponse',
            'resultTrackSkybill' => '\Scraper\ScraperChronopostTracking\StructType\ResultTrackSkybill',
            'searchPODWithSenderRef' => '\Scraper\ScraperChronopostTracking\StructType\SearchPODWithSenderRef',
            'searchPODWithSenderRefResponse' => '\Scraper\ScraperChronopostTracking\StructType\SearchPODWithSenderRefResponse',
            'resultSearchPODWithSenderRef' => '\Scraper\ScraperChronopostTracking\StructType\ResultSearchPODWithSenderRef',
            'parcelPOD' => '\Scraper\ScraperChronopostTracking\StructType\ParcelPOD',
        ];
    }
}
