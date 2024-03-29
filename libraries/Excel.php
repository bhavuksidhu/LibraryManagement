<?php defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 *  ============================================================================== 
 *  Author	: Sher Khan
 *  Email	: sakhan@otsglobal.org 
 *  For		: PHPExcel
 *  Web		: https://github.com/PHPOffice/PHPExcels
 *  License	: LGPL (GNU LESSER GENERAL PUBLIC LICENSE)
 *		: https://github.com/PHPOffice/PHPExcel/blob/master/license.md
 *  ============================================================================== 
 */
require_once APPPATH . "/third_party/PHPExcel/PHPExcel.php";

class Excel extends PHPExcel
{
    public function __construct()
    {
        parent::__construct();
    }
}
