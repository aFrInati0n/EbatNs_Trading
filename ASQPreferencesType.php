<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Enables a seller to add custom Ask Seller a Question (ASQ)subjects to display on 
 * the seller's Ask a Question page, or resetthe custom subjects to the default 
 * values. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ASQPreferencesType.html
 *
 */
class ASQPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $ResetDefaultSubjects;
	/**
	 * @var string
	 */
	protected $Subject;

	/**
	 * @return boolean
	 */
	function getResetDefaultSubjects()
	{
		return $this->ResetDefaultSubjects;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setResetDefaultSubjects($value)
	{
		$this->ResetDefaultSubjects = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getSubject($index = null)
	{
		if ($index !== null) {
			return $this->Subject[$index];
		} else {
			return $this->Subject;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setSubject($value, $index = null)
	{
		if ($index !== null) {
			$this->Subject[$index] = $value;
		} else {
			$this->Subject = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addSubject($value)
	{
		$this->Subject[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ASQPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ResetDefaultSubjects' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Subject' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
