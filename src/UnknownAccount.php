<?php
/**
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace ledgr\banking;

/**
 * Fake account, all is valid
 *
 * @author Hannes Forsgård <hannes.forsgard@fripost.org>
 */
class UnknownAccount implements AccountNumber
{
    use Component\Constructor;

    /**
     * Get string describing account type (implements AccountNumber)
     *
     * @return string
     */
    public function getType()
    {
        return "Unknown";
    }

    /**
     * Get regular expression describing structure (from Component\Constructor)
     *
     * @return string
     */
    protected function getStructure()
    {
        return "/^(\d{4}),?(\d{6,11})(\d)$/";
    }
}
