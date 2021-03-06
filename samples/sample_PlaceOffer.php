<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'PlaceOfferRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_PlaceOffer
 * 
 * Sample call for PlaceOffer
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_PlaceOffer.php,v 1.107 2012-09-10 11:01:22 michaelcoslar Exp $
 * @access public
 */
class sample_PlaceOffer extends EbatNs_Environment
{

   /**
     * sample_PlaceOffer::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new PlaceOfferRequestType();
        $req->setItemID($params['ItemID']);
        
        $offer = new OfferType();
        $offer->setMaxBid($params['MaxBid']);
        $offer->setQuantity($params['Quantity']);
        $offer->setAction($params['Action']);
        $req->setOffer($offer);
		
        $res = $this->proxy->PlaceOffer($req);
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

$x = new sample_PlaceOffer();
$x->dispatchCall
(
	array
	(
		'ItemID' => '',
		'MaxBid' => '3.00',
		'Quantity' => '1',
		'Action' => 'Bid'
	)
);
?>