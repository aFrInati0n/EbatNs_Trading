<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetStoreRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetStore
 * 
 * Sample call for GetStore
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetStore.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public
 */
class sample_GetStore extends EbatNs_Environment
{

   /**
     * sample_GetStore::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetStoreRequestType();
		
        $res = $this->proxy->GetStore($req);
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

$x = new sample_GetStore();
$x->dispatchCall(array());
?>