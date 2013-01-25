<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'VerifyAddItemRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_VerifyAddItem
 * 
 * Sample call for VerifyAddItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_VerifyAddItem.php,v 1.65 2010-11-15 07:33:16 michael Exp $
 * @access public
 */
class sample_VerifyAddItem extends EbatNs_Environment
{

   /**
     * sample_VerifyAddItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new VerifyAddItemRequestType();
        
        $item = new ItemType();
        $item->setTitle($params['Title']);
        $item->setQuantity($params['Quantity']);
        $item->setCurrency($params['Currency']);
        $item->setCountry($params['Country']);
        $item->setStartPrice($params['StartPrice']);
        $item->setListingDuration($params['ListingDuration']);
        $item->setLocation($params['Location']);
        $item->setPaymentMethods($params['PaymentMethods']);
        $item->setListingType($params['ListingType']);
        $item->setDescription($params['Description']);
        
        $primaryCategory = new CategoryType();
        $primaryCategory->setCategoryID($params['CategoryID']);
        $item->setPrimaryCategory($primaryCategory);
		
        $req->setItem($item);
        
        $res = $this->proxy->VerifyAddItem($req);
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

$x = new sample_VerifyAddItem();
$x->dispatchCall
(
	array
	(
		'Title' => 'New iPod',
		'Quantity' => '1',
		'Currency' => 'EUR',
		'Country' => 'DE',
		'StartPrice' => '3.00',
		'ListingDuration' => 'Days_7',
		'Location' => 'Cologne',
		'PaymentMethods' => 'CashOnPickup',
		'ListingType' => 'Chinese',
		'Description' => 'New Test-iPod.',
		'CategoryID' => '8267'
	)
);
?>
