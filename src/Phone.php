<?php

namespace Hofthek\Phone;

use libphonenumber\PhoneNumberUtil;

class Phone 
{
    public function parse(string $number, ?string $regionCode = null)
    {
        $swissNumberStr = "044 668 18 00";
        $phoneUtil = PhoneNumberUtil::getInstance();
        try {
            $swissNumberProto = $phoneUtil->parse($number, $regionCode);
            var_dump($swissNumberProto);
        } catch (\libphonenumber\NumberParseException $e) {
            var_dump($e);
        }
    }

    public function isMobileNumber() {}
    public function isFixeNumber() {}
    public function isShortNumber() {}
    public function isCountryNumber(string $country) {}
}