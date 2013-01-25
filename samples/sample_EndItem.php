<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'EndItemRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_EndItem
 * 
 * Sample call for EndItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_EndItem.php,v 1.94 2012-05-09 11:06:29 michaelcoslar Exp $
 * @access public 
 */
class sample_EndItem extends EbatNs_Environment
{

   /**
     * sample_EndItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new EndItemRequestType();
        $req->setItemID($params['ItemID']);
        $req->setEndingReason($params['EndingReason']);
		
        $res = $this->proxy->EndItem($req);
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

$x = new sample_EndItem();
$x->dispatchCall
(
	array
	(
		'ItemID' => '11031854682',
		'EndingReason' => 'LostOrBroken'
	)
);
?>
