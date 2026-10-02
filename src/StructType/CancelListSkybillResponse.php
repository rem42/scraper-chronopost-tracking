<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelListSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelListSkybillResponse.
 */
#[\AllowDynamicProperties]
class CancelListSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultListCancelSkybill $return = null;

    /**
     * Constructor method for cancelListSkybillResponse.
     *
     * @uses CancelListSkybillResponse::setReturn()
     */
    public function __construct(?ResultListCancelSkybill $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultListCancelSkybill
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultListCancelSkybill $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
