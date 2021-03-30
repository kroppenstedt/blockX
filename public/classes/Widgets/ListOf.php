<?php


namespace Palasthotel\WordPress\BlockX\Widgets;

use Palasthotel\WordPress\BlockX\Model\ContentStructure;

class ListOf extends _Widget {

	const TYPE = "list_of";

	/**
	 * @var ContentStructure
	 */
	private $contentStructure;

	/**
	 * ListOf constructor.
	 *
	 * @param string $key
	 * @param string $label
	 * @param _Widget[] $contentStructure
	 * @param array $defaultValue
	 */
	public function __construct( string $key, string $label, array $contentStructure, array $defaultValue ) {
		parent::__construct( $key, $label, static::TYPE, $defaultValue );
		$this->contentStructure = new ContentStructure( $contentStructure );
	}

	public static function build( string $key, string $label, array $contentStructure, array $defaultValue = [] ) {
		return new static( $key, $label, $contentStructure, $defaultValue );
	}

	/**
	 * @return ContentStructure
	 */
	public function contentStructure() {
		return $this->contentStructure;
	}

	/**
	 * @return array
	 */
	public function toArray() {
		$arr                     = parent::toArray(); // TODO: Change the autogenerated stub
		$arr["contentStructure"] = $this->contentStructure()->toArray();
		$defaultValues           = [];
		foreach ( $this->contentStructure->getItems() as $widget ) {
			$defaultValues[ $widget->key() ] = $widget->defaultValue();
		}
		$arr["defaultValues"] = $defaultValues;

		return $arr;
	}

}