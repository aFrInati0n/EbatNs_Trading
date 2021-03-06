<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'RemoveFromWatchListRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_RemoveFromWatchList
 * 
 * Sample call for RemoveFromWatchList
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_RemoveFromWatchList.php,v 1.107 2012-09-10 11:01:22 michaelcoslar Exp $
 * @access public
 */
class sample_RemoveFromWatchList extends EbatNs_Environment
{

   /**
     * sample_RemoveFromWatchList::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new RemoveFromWatchListRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->RemoveFromWatchList($req);
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

$x = new sample_RemoveFromWatchList();
$x->dispatchCall
(
	array
	(
		'ItemID' => '110031606665'
	)
);
?>