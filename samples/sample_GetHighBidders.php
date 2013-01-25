<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetHighBiddersRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetHighBidders
 * 
 * Sample call for GetHighBidders
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetHighBidders.php,v 1.67 2010-11-15 07:37:31 michael Exp $
 * @access public 
 */
class sample_GetHighBidders extends EbatNs_Environment
{

   /**
     * sample_GetHighBidders::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetHighBiddersRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->GetHighBidders($req);
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

$x = new sample_GetHighBidders();
$x->dispatchCall
(
	array
	(
		'ItemID' => 'dummy'
	)
);
?>