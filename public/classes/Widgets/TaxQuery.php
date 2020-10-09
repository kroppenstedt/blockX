<?php


namespace Palasthotel\WordPress\BlockX\Widgets;


use Palasthotel\WordPress\BlockX\Model\Option;

class TaxQuery extends _Widget {

	const TYPE = "tax_query";

	/**
	 * @var string[]
	 */
	private $taxonomies = [];

	public function __construct( string $key, string $label, array $defaultValue = [] ) {
		parent::__construct( $key, $label, static::TYPE, $defaultValue );
	}

	/**
	 * @param string $key
	 * @param string $label
	 * @param array $defaultValue
	 *
	 * @return TaxQuery
	 */
	public static function build(string $key, string $label, array $defaultValue = []){
		return new static($key, $label, $defaultValue);
	}

	/**
	 * @param Option[] $taxonomies
	 *
	 * @return TaxQuery
	 */
	public function useTaxonomies(array $taxonomies){
		$this->taxonomies = $taxonomies;
		return $this;
	}

	public function toArray() {
		$arr = parent::toArray(); // TODO: Change the autogenerated stub
		$arr["taxonomies"] = $this->taxonomies;
		return $arr;
	}
}