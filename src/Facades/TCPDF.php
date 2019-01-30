<?php

namespace towc19\TCPDF\Facades;

use Illuminate\Support\Facades\Facade;

class TCPDF extends Facade
{
	protected static function getFacadeAccessor(){return 'towc19tcpdf';}
}
