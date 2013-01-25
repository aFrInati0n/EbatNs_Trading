<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetMyeBayBuyingRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetMyeBayBuying
 * 
 * Sample call for GetMyeBayBuying
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetMyeBayBuying.php,v 1.106 2012-09-10 10:55:15 michaelcoslar Exp $
 * @access public 
 */
class sample_GetMyeBayBuying extends EbatNs_Environment
{

   /**
     * sample_GetMyeBayBuying::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetMyeBayBuyingRequestType();
		
        $res = $this->proxy->GetMyeBayBuying($req);
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

$x = new sample_GetMyeBayBuying();
$x->dispatchCall(array());
?>