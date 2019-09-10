<?php

namespace SchulzeFelix\AdWords\Responses;

class MonthlySearchVolume extends DataTransferObject
{
    protected $casts = [
        'year'  => 'integer',
        'month' => 'integer',
        'count' => 'integer',
    ];
}
