// See http://brunch.io for documentation.
module.exports = {
	files: {
		javascripts: {
			joinTo: {
				'lib/vendor.js': /^(?!app)/,
				'lib/app.js': /^app/,
			}
		},
		stylesheets: {
			joinTo: {
				'lib/vendor.css': /^(?!app)/,
				'lib/app.css': /^app/,
			}
		},
	},

	paths: {
		public: '../public',
	},

	npm: {
		globals: {
			$: 'jquery'
		},
		styles: {},
		static: [],
		aliases: {},
	},

	sourceMaps: 'inline',
}
