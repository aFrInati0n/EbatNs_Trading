<?php
// autogenerated file 05.05.2008 16:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_AttributeSetType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_AttributeSetArrayType extends EbatNs_ComplexType
{
	/**
	 * @var EbatNsCsSetExt_AttributeSetType
	 */
	protected $AttributeSet;

	/**
	 * @return EbatNsCsSetExt_AttributeSetType
	 * @param integer $index 
	 */
	function getAttributeSet($index = null)
	{
		if ($index !== null) {
			return $this->AttributeSet[$index];
		} else {
			return $this->AttributeSet;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_AttributeSetType $value 
	 * @param  $index 
	 */
	function setAttributeSet($value, $index = null)
	{
		if ($index !== null) {
			$this->AttributeSet[$index] = $value;
		} else {
			$this->AttributeSet = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_AttributeSetType $value 
	 */
	function addAttributeSet($value)
	{
		$this->AttributeSet[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_AttributeSetArrayType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'AttributeSet' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_AttributeSetType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
