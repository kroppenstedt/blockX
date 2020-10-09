<?php


namespace Palasthotel\WordPress\BlockX\ContentStructure;


class Text extends _Item {

	const TYPE = "text";

	public function __construct( string $key, string $label, string $defaultValue ) {
		parent::__construct( $key, $label, static::TYPE, $defaultValue );
	}
}