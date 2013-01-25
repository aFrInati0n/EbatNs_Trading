<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetNotificationPreferencesRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetNotificationPreferences
 * 
 * Sample call for GetNotificationPreferences
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetNotificationPreferences.php,v 1.90 2011-12-29 14:03:00 michaelcoslar Exp $
 * @access public 
 */
class sample_GetNotificationPreferences extends EbatNs_Environment
{

   /**
     * sample_GetNotificationPreferences::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetNotificationPreferencesRequestType();
        $req->setPreferenceLevel($params['PreferenceLevel']);
        
        $res = $this->proxy->GetNotificationPreferences($req);
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

$x = new sample_GetNotificationPreferences();
$x->dispatchCall
(
	array
	(
		'PreferenceLevel' => 'User'
	)
);

?>