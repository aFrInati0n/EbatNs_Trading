<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetShippingDiscountProfilesRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetShippingDiscountProfiles
 * 
 * Sample call for GetShippingDiscountProfiles
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetShippingDiscountProfiles.php,v 1.66 2010-11-15 07:35:33 michael Exp $
 * @access public
 */
class sample_GetShippingDiscountProfiles extends EbatNs_Environment
{

   /**
     * sample_GetShippingDiscountProfiles::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetShippingDiscountProfilesRequestType();
        
        $res = $this->proxy->GetShippingDiscountProfiles($req);
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

$x = new sample_GetShippingDiscountProfiles();
$x->dispatchCall(array());

?>