const path = require('path');
const defaultConfig = require('@wordpress/scripts/config/webpack.config');
module.exports = {
	...defaultConfig,
	entry: {
		'example-one': './example-one',
		'example-one-view': './example-one/view.js',
		'example-two': './example-two',
		'example-two-view': './example-two/view.js',
		'example-three': './example-three',
		'example-three-view': './example-three/view.js',
		'example-four': './example-four',
		'example-four-view': './example-four/view.js',
		'example-five': './example-five',
		'example-five-view': './example-five/view.js',
		'example-six': './example-six',
		'example-six-view': './example-six/view.js',
	},
	output: {
		path: path.resolve(__dirname, './build') // packaged directory
	}
};
