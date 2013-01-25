<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetReturnURLRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetReturnURL
 * 
 * Sample call for GetReturnURL
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetReturnURL.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public
 */
class sample_GetReturnURL extends EbatNs_Environment
{

   /**
     * sample_GetReturnURL::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetReturnURLRequestType();
        
        $res = $this->proxy->GetReturnURL($req);
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

$x = new sample_GetReturnURL();
$x->dispatchCall(array());

?>