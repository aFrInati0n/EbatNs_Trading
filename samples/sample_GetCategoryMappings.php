<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetCategoryMappingsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetCategoryMappings
 * 
 * Sample call for GetCategoryMappings
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetCategoryMappings.php,v 1.90 2011-12-29 14:03:00 michaelcoslar Exp $
 * @access public 
 */
class sample_GetCategoryMappings extends EbatNs_Environment
{

   /**
     * sample_GetCategoryMappings::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetCategoryMappingsRequestType();
        
        $res = $this->proxy->GetCategoryMappings($req);
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

$x = new sample_GetCategoryMappings();
$x->dispatchCall(array());

?>