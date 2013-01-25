<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetDisputeRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetDispute
 * 
 * Sample call for GetDispute
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetDispute.php,v 1.70 2011-02-24 10:37:16 michael Exp $
 * @access public 
 */
class sample_GetDispute extends EbatNs_Environment
{

   /**
     * sample_GetDispute::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetDisputeRequestType();
        $req->setDisputeID($params['DisputeID']);
		
        $res = $this->proxy->GetDispute($req);
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

$x = new sample_GetDispute();
$x->dispatchCall
(
	array
	(
		'DisputeID' => 'dummy'
	)
);
?>