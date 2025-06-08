const path = require("path"),
	removeEmptyScriptsPlugin = require("webpack-remove-empty-scripts"),
	webpackConfig = require("@wordpress/scripts/config/webpack.config"),
	BrowserSyncPlugin = require('browser-sync-webpack-plugin'),
	IconFontPlugin = require('./webpack.icon-font-plugin'),
	MiniCssExtractPlugin = require('mini-css-extract-plugin'),
	CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

// Extend the @wordpress webpack config and add the entry points.
module.exports = {
	...webpackConfig,
	...{
		mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
		stats: {
			errorDetails: true,
			children: true
		},
		devServer: {
			static: {
				directory: path.join(__dirname, "src"),
			},
			client: {
				overlay: false,
			},
			// open: ["http://localhost"], // (Optional) Add your local domain here
			liveReload: true,
			hot: false,
			compress: true,
			devMiddleware: {
				writeToDisk: true,
			},
		},
		context: path.resolve(__dirname, "src"),
		entry: {
			main: ["./main.js", "./main.scss"]
		},
		// jQuery support
		/*externals: {
			jquery: "jQuery",
		},*/
		plugins: [
			...webpackConfig.plugins,
			/*new webpack.ProvidePlugin({
				$: "jquery",
				jQuery: "jquery",
				"window.jQuery": "jquery",
			}),*/
			new removeEmptyScriptsPlugin({
				stage: removeEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
			}),
			new BrowserSyncPlugin({
				host: 'localhost',
				port: 3000,
				proxy: 'http://localhost',
				files: [
					'dist/**/*',
					'**/*.php'
				]
			}),
			new MiniCssExtractPlugin({
				filename: '[name].min.css',
				chunkFilename: '[id].min.css'
			})
		],
		optimization: {
			minimize: true,
			minimizer: [
				`...`,
				new CssMinimizerPlugin({
					minimizerOptions: {
						preset: [
							'default',
							{
								discardComments: { removeAll: true },
							},
						],
					},
				}),
			],
		},
		output: {
			path: path.resolve(__dirname, "dist"),
			publicPath: "/wp-content/themes/psw/dist/",
			filename: '[name].js',
			clean: true
		},
		resolve: {
			alias: {
				fonts: path.resolve(__dirname, 'dist/fonts')
			}
		},
		module: {
			rules: [
				{
					test: /\.scss$/,
					use: [
						{
							loader: MiniCssExtractPlugin.loader,
							options: {
								publicPath: '../'
							}
						},
						{
							loader: 'css-loader',
							options: {
								sourceMap: true,
								importLoaders: 2
							}
						},
						{
							loader: 'postcss-loader',
							options: {
								sourceMap: true,
								postcssOptions: {
									plugins: [
										'autoprefixer'
									]
								}
							}
						},
						{
							loader: 'sass-loader',
							options: {
								sourceMap: true,
								sassOptions: {
									outputStyle: 'compressed'
								}
							}
						}
					]
				},
				{
					test: /\.(woff2?|ttf|eot|svg)$/,
					type: 'asset/resource',
					generator: {
						filename: 'fonts/[name][ext]'
					}
				}
			]
		},
	},
};
