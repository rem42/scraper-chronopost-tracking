<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillV2Response.
 */
#[\AllowDynamicProperties]
class TrackSkybillV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultTrackSkybillV2 $return = null;

    /**
     * Constructor method for trackSkybillV2Response.
     *
     * @uses TrackSkybillV2Response::setReturn()
     */
    public function __construct(?ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultTrackSkybillV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
