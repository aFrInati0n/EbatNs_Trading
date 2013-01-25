<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetItemShippingRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetItemShipping
 * 
 * Sample call for GetItemShipping
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetItemShipping.php,v 1.71 2011-03-18 11:46:00 michael Exp $
 * @access public 
 */
class sample_GetItemShipping extends EbatNs_Environment
{

   /**
     * sample_GetItemShipping::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetItemShippingRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->GetItemShipping($req);
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

$x = new sample_GetItemShipping();
$x->dispatchCall
(
	array
	(
		'ItemID' => 'dummy'
	)
);
?>