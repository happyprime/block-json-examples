import { registerBlockType } from '@wordpress/blocks';

import ServerSideRender from '@wordpress/server-side-render';

import metadata from './block.json';

registerBlockType(metadata, {
edit: () => {

	return (
		<div>
			<ServerSideRender block={metadata.name} />
		</div>
	);
},
});
