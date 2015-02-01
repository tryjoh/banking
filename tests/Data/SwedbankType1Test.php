<?php

namespace byrokrat\banking\Data;

/**
 * @coversNothing
 */
class SwedbankType1Test extends AccountNumberTestCase
{
    public function getParserName()
    {
        return 'SwedbankType1';
    }

    public function getBankName()
    {
        return 'Swedbank';
    }

    public function invalidStructureProvider()
    {
        return array(
            array('7000,111111'),
            array('7000,11111'),
            array('7000,11111111'),
            array('7000,0000001111111'),
        );
    }

    public function invalidClearingProvider()
    {
        return array(
            array('6999,1111111'),
            array('8000,1111111'),
        );
    }

    public function invalidCheckDigitProvider()
    {
        return array(
            array('7000,1111111'),
            array('7822,1420650'),
            array('7950,1450700'),
        );
    }

    /**
     * NOTE: Delimiter between clearing and clearing check digit should be optional
     */
    public function validProvider()
    {
        return array(
            array('7000,1111116'),
            array('7000,000001111116'),
            array('78221420654'),
            array('7950,145070-8'),
        );
    }
}