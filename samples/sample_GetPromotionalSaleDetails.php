<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetPromotionalSaleDetailsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetPromotionalSaleDetails
 * 
 * Sample call for GetPromotionalSaleDetails
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetPromotionalSaleDetails.php,v 1.77 2011-07-22 07:11:43 michael Exp $
 * @access public 
 */
class sample_GetPromotionalSaleDetails extends EbatNs_Environment
{

   /**
     * sample_GetPromotionalSaleDetails::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetPromotionalSaleDetailsRequestType();
        
        $res = $this->proxy->GetPromotionalSaleDetails($req);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_GetPromotionalSaleDetails();
$x->dispatchCall(array());

?>