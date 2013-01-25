<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetProductsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetProducts
 * 
 * Sample call for GetProducts
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetProducts.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public 
 */
class sample_GetProducts extends EbatNs_Environment
{

   /**
     * sample_GetProducts::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetProductsRequestType();
        
        $ProductSearch = new ProductSearchType();
        $ProductSearch->setQueryKeywords($params['QueryKeywords']);
        $req->setProductSearch($ProductSearch);
		
        $res = $this->proxy->GetProducts($req);
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

$x = new sample_GetProducts();
$x->dispatchCall
(
	array
	(
		'QueryKeywords' => 'Harry Potter'
	)
);
?>
