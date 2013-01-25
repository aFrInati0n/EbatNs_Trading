<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'AddToWatchListRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_AddToWatchList
 * 
 * Sample call for AddToWatchList
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_AddToWatchList.php,v 1.71 2011-03-18 11:45:59 michael Exp $
 * @access public 
 */
class sample_AddToWatchList extends EbatNs_Environment
{

   /**
     * sample_AddToWatchList::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new AddToWatchListRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->AddToWatchList($req);
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

$x = new sample_AddToWatchList();
$x->dispatchCall
(
	array
	(
		'ItemID' => '110031606665'
	)
);
?>