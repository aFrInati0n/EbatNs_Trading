<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetUserRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetUser
 * 
 * Sample call for GetUser
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetUser.php,v 1.70 2011-02-24 10:37:17 michael Exp $
 * @access public
 */
class sample_GetUser extends EbatNs_Environment
{

   /**
     * sample_GetUser::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetUserRequestType();
		
        $res = $this->proxy->GetUser($req);
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

$x = new sample_GetUser();
$x->dispatchCall(array());
?>
