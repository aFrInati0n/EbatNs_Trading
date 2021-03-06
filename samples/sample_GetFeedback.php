<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetFeedbackRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetFeedback
 * 
 * Sample call for GetFeedback
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetFeedback.php,v 1.107 2012-09-10 11:01:20 michaelcoslar Exp $
 * @access public 
 */
class sample_GetFeedback extends EbatNs_Environment
{

   /**
     * sample_GetFeedback::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetFeedbackRequestType();
        $req->setDetailLevel($params['DetailLevel']);
		
        $res = $this->proxy->GetFeedback($req);
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

$x = new sample_GetFeedback();
$x->dispatchCall
(
	array
	(
		'DetailLevel' => 'ReturnAll'
	)
);
?>
