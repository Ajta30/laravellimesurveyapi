<?php

namespace ajta30\laravellimesurveyapi\Facades;

use Illuminate\Support\Facades\Facade;

class LimeSurveyAPI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    { 
    	return \ajta30\laravellimesurveyapi\LimesurveyApi::class;
    }
}
