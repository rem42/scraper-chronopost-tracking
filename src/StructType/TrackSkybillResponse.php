<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillResponse.
 */
#[\AllowDynamicProperties]
class TrackSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultTrackSkybill $return = null;

    /**
     * Constructor method for trackSkybillResponse.
     *
     * @uses TrackSkybillResponse::setReturn()
     */
    public function __construct(?ResultTrackSkybill $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultTrackSkybill
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultTrackSkybill $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
