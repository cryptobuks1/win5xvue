<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */
namespace Ethereum\DataType;

/**
 * Ethereum data type SHHFilter.
 * 
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class SHHFilter extends EthDataType {

	/**
	 * Value for 'topics'.
	 */
	public $topics;

	/**
	 * Value for 'to'.
	 */
	public $to;

	/**
	 * @param array $topics Array of EthD
	 * @param EthD $to
	 */
	public function __construct(array $topics, EthD $to = null) {
		$this->topics = $topics;  
		$this->to = $to;
	}

	/**
	 * Returns a name => type array.
	 */
	public static function getTypeArray() {
		return array( 
			'topics' => '[EthD]',
			'to' => 'EthD',
		);
	}

	/**
	 * Returns array with values.
	 */
	public function toArray() {
		$return = [];
		(!is_null($this->topics)) ? $return['topics'] = Ethereum::valueArray($this->topics, 'EthD') : array(); 
		(!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
		return $return;
	}
}