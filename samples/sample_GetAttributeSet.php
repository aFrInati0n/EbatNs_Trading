<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'EbatNs_CharacteristicSetDependencyLinker.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetAttributeSet
 * 
 * Sample call for GetAttributeSet
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetAttributeSet.php,v 1.70 2011-02-24 10:37:16 michael Exp $
 * @access public 
 */
class sample_GetAttributeSet extends EbatNs_Environment
{

   /**
     * sample_GetAttributeSet::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     */
    public function dispatchCall ($params)
    {
		$csdl = new EbatNs_CharacteristicSetDependencyLinker($this->proxy);
		// fetch only version
		$csdl->fetchByCsSetId($params['CsSetID']);
		
		$this->dumpObject($csdl->getCharactericsSet($params['CsSetID']));
    }
}

$x = new sample_GetAttributeSet();
$x->dispatchCall
(
	array
	(
		'CsSetID' => '1950'
	)
);
?>