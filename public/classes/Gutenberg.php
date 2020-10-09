<?php


namespace Palasthotel\WordPress\BlockX;

use Palasthotel\WordPress\BlockX\Blocks\_BlockType;
use Palasthotel\WordPress\BlockX\Blocks\Posts;

class Gutenberg extends _Component {

	/**
	 * @var _BlockType[]
	 */
	private $blocks = [];

	public function onCreate() {

		// ---------------------------
		// initialize stuff
		// ---------------------------
		add_action('init', function(){
			// collect all block classes
			do_action(Plugin::ACTION_COLLECT, $this);
			// let blocks register
			foreach ($this->blocks as $block){
				$block->registerBlock();
			}
		});

		// ---------------------------
		// collect core blocks
		// ---------------------------
		add_action(Plugin::ACTION_COLLECT, function($gutenberg){
			/**
			 * @var Gutenberg $gutenberg
			 */
			$gutenberg->addBlockType(new Posts($this->plugin));
		});

		// ---------------------------
		// enqueue assets
		// ---------------------------
		add_action( 'enqueue_block_editor_assets', function () {
			// backend only
			$this->plugin->assets->enqueueGutenberg($this->blocks);
			foreach ($this->blocks as $block){
				$block->enqueueEditorAssets();
			}
		} );
		add_action( 'enqueue_block_assets', function () {
			// frontend and backend
			foreach ($this->blocks as $block){
				$block->enqueueAssets();
			}
		} );
	}

	/**
	 * add a block type
	 *
	 * @param _BlockType $block
	 */
	public function addBlockType( _BlockType $block){
		$this->blocks[] = $block;
	}

}