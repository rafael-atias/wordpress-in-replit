( function( wp ) {
	/**
	 * Registers a new block provided a unique name and an object defining its behavior.
	 *
	 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
	 */
	var registerBlockType = wp.blocks.registerBlockType;

	/**
	 * Returns a new element of given type. Element is an abstraction layer atop React.
	 *
	 * @see https://developer.wordpress.org/block-editor/packages/packages-element/
	 */
	var el = wp.element.createElement;

	/**
	 * Retrieves the translation of text.
	 *
	 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
	 */
	var __ = wp.i18n.__;

	/**
	 * This hook is used to mark the block wrapper element.
	 *
	 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
	 */
	var useBlockProps = wp.blockEditor.useBlockProps;

	/**
	 * Every block starts by registering a new block type definition.
	 *
	 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
	 */
	registerBlockType( 'helloblocks/my-first-es5-block', {
		/**
		 * @see https://make.wordpress.org/core/2020/11/18/block-api-version-2/
		 */
		apiVersion: 2,

		/**
		 * This is the display title for your block, which can be translated with `i18n` functions.
		 * The block inserter will show this name.
		 */
		title: __(
			'My First ES5 Block',
			'my-first-es5-block'
		),

		/**
		 * This is a short description for your block, can be translated with `i18n` functions.
		 * It will be shown in the Block Tab in the Settings Sidebar.
		 */
		description: __(
			'Example static block scaffolded with Create Block tool – no build step required.',
			'my-first-es5-block'
		),

		/**
		 * Blocks are grouped into categories to help users browse and discover them.
		 * The categories provided by core are `text`, `media`, `design`, `widgets`, and `embed`.
		 */
		category: 'widgets',

		/**
		 * An icon property should be specified to make it easier to identify a block.
		 * These can be any of WordPress’ Dashicons, or a custom svg element.
		 */
		icon: 'smiley',

		/**
		 * Optional block extended support features.
		 */
		supports: {
			// Removes support for an HTML mode.
			html: false,
		},

		/**
		 * The edit function describes the structure of your block in the context of the editor.
		 * This represents what the editor will render when the block is used.
		 *
		 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
		 *
		 * @return {WPElement} Element to render.
		 */
		edit: function() {
			return el(
				'p',
				useBlockProps(),
				__( 'My First ES5 Block – hello from the editor!', 'my-first-es5-block' )
			);
		},

		/**
		 * The save function defines the way in which the different attributes should be combined
		 * into the final markup, which is then serialized by the block editor into `post_content`.
		 *
		 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
		 *
		 * @return {WPElement} Element to render.
		 */
		save: function() {
			return el(
				'p',
				useBlockProps.save(),
				__( 'My First ES5 Block – hello from the saved content!', 'my-first-es5-block' )
			);
		},
	} );
}(
	window.wp
) );
