<?php

namespace byrokrat\banking;

/**
 * The basic account interface
 */
interface AccountNumberInterface
{
    /**
     * Get account as string
     *
     * @return string
     */
    public function __toString();

    /**
     * Get account as string
     *
     * @return string
     */
    public function getNumber();

    /**
     * Get clearing number, 4 digits
     *
     * @return string
     */
    public function getClearingNumber();

    /**
     * Get the check digit of the clearing number
     *
     * @return string Empty if not applicable
     */
    public function getClearingCheckDigit();

    /**
     * Get account serial number
     *
     * @return string
     */
    public function getSerialNumber();

    /**
     * Get account check digit
     *
     * @return string
     */
    public function getCheckDigit();

    /**
     * Get account as a 16 digit number
     *
     * Clearing number (4 digits) + x number of ceros + serial number
     *
     * @return string
     */
    public function get16();

    /**
     * Get name of Bank this number belongs to
     *
     * @return string
     */
    public function getBankName();
}