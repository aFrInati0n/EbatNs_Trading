<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetItemRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetItem
 * 
 * Sample call for GetItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetItem.php,v 1.107 2012-09-10 11:01:20 michaelcoslar Exp $
 * @access public 
 */
class sample_GetItem extends EbatNs_Environment
{

   /**
     * sample_GetItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetItemRequestType();
        $req->setItemID($params['ItemID']);
        
        $res = $this->proxy->GetItem($req);
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

$x = new sample_GetItem();
$x->dispatchCall
(
	array
	(
		'ItemID' => '110031429807'
	)
);
?>
