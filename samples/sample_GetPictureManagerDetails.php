<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetPictureManagerDetailsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetPictureManagerDetails
 * 
 * Sample call for GetPictureManagerDetails
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetPictureManagerDetails.php,v 1.67 2010-11-15 07:37:31 michael Exp $
 * @access public 
 */
class sample_GetPictureManagerDetails extends EbatNs_Environment
{

   /**
     * sample_GetPictureManagerDetails::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetPictureManagerDetailsRequestType();
        
        $res = $this->proxy->GetPictureManagerDetails($req);
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

$x = new sample_GetPictureManagerDetails();
$x->dispatchCall(array());

?>