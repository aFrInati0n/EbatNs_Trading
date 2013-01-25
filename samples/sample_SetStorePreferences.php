<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'SetStorePreferencesRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_SetStorePreferences
 * 
 * Sample call for SetStorePreferences
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_SetStorePreferences.php,v 1.87 2011-12-29 13:44:09 michaelcoslar Exp $
 * @access public
 */
class sample_SetStorePreferences extends EbatNs_Environment
{

   /**
     * sample_SetStorePreferences::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new SetStorePreferencesRequestType();
		
        $res = $this->proxy->SetStorePreferences($req);
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

$x = new sample_SetStorePreferences();
$x->dispatchCall(array());
?>