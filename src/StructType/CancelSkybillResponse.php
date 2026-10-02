<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse.
 */
#[\AllowDynamicProperties]
class CancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultCancelSkybill $return = null;

    /**
     * Constructor method for cancelSkybillResponse.
     *
     * @uses CancelSkybillResponse::setReturn()
     */
    public function __construct(?ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultCancelSkybill
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultCancelSkybill $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
