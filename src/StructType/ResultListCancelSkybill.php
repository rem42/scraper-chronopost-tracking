<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultListCancelSkybill StructType.
 */
#[\AllowDynamicProperties]
class ResultListCancelSkybill extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /** The statusCode */
    protected int $statusCode;

    /**
     * The skybills
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<string>|null
     */
    protected ?array $skybills = null;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * Constructor method for resultListCancelSkybill.
     *
     * @uses ResultListCancelSkybill::setErrorCode()
     * @uses ResultListCancelSkybill::setStatusCode()
     * @uses ResultListCancelSkybill::setSkybills()
     * @uses ResultListCancelSkybill::setErrorMessage()
     *
     * @param array<string> $skybills
     */
    public function __construct(int $errorCode, int $statusCode, ?array $skybills = null, ?string $errorMessage = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setStatusCode($statusCode)
            ->setSkybills($skybills)
            ->setErrorMessage($errorMessage)
        ;
    }

    /**
     * Get errorCode value.
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode value.
     */
    public function setErrorCode(int $errorCode): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get statusCode value.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Set statusCode value.
     */
    public function setStatusCode(int $statusCode): self
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get skybills value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<string>|null
     */
    public function getSkybills(): ?array
    {
        return $this->skybills ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSkybills method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybills method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillsForArrayConstraintFromSetSkybills(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $resultListCancelSkybillSkybillsItem) {
            // validation for constraint: itemType
            if (!is_string($resultListCancelSkybillSkybillsItem)) {
                $invalidValues[] = is_object($resultListCancelSkybillSkybillsItem) ? get_class($resultListCancelSkybillSkybillsItem) : sprintf('%s(%s)', gettype($resultListCancelSkybillSkybillsItem), var_export($resultListCancelSkybillSkybillsItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The skybills property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set skybills value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<string> $skybills
     *
     * @throws \InvalidArgumentException
     */
    public function setSkybills(?array $skybills = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillsArrayErrorMessage = self::validateSkybillsForArrayConstraintFromSetSkybills($skybills))) {
            throw new \InvalidArgumentException($skybillsArrayErrorMessage, __LINE__);
        }

        if (is_null($skybills) || (is_array($skybills) && empty($skybills))) {
            unset($this->skybills);
        } else {
            $this->skybills = $skybills;
        }

        return $this;
    }

    /**
     * Add item to skybills value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToSkybills(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The skybills property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybills[] = $item;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
