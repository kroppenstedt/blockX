<?php


namespace Palasthotel\WordPress\BlockX\Widgets;


class ContentStructure {
	/**
	 * @var _Widget[]
	 */
	private $items;

	/**
	 * ContentStructure constructor.
	 *
	 * @param _Widget[] $items
	 */
	public function __construct( array $items) {
		$this->items = $items;
	}

	/**
	 * @return array
	 */
	public function toArray(){
		$cs = [];
		foreach ($this->items as $item){
			$cs[] = $item->toArray();
		}
		return $cs;
	}

}