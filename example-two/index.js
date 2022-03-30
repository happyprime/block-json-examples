import { registerBlockType } from '@wordpress/blocks';

import metadata from './block.json';

registerBlockType(metadata, {
edit: () => {

	return (
		<div>
			<h1>Example Two Block</h1>
		</div>
	);
},
save: () => {
	return (
		<div>
			<h1>Example Two Block</h1>
		</div>
	);
},
});
