<?php

namespace SchulzeFelix\AdWords\Responses;

class Keyword extends DataTransferObject
{
    protected $casts = [
        'keyword'                   => 'string',
        'search_volume'             => 'integer',
        'cpc'                       => 'float',
        'competition'               => 'float',
        'targeted_monthly_searches' => 'collection',
        'amz_search_volume'         => 'integer',
        'amz_seasonality'           => 'string',
        'amz_categories'            => 'array'
    ];
}
