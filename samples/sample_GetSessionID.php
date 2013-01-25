<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetSessionIDRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetSessionID
 * 
 * Sample call for GetSessionID
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetSessionID.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public
 */
class sample_GetSessionID extends EbatNs_Environment
{

   /**
     * sample_GetSessionID::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetSessionIDRequestType();
        $req->setRuName($params['RuName']);
        
        $res = $this->proxy->GetSessionID($req);
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

$x = new sample_GetSessionID();
$x->dispatchCall
(
	array
	(
		'RuName' => 'dummyRuName'
	)
);

?>