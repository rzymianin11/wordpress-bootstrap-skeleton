const webpack = require('webpack');
const IconFontPlugin = require('../webpack.icon-font-plugin');

// Create a minimal webpack configuration
const config = {
    mode: 'production',
    entry: './src/main.js',
    output: {
        path: __dirname + '/../dist',
        filename: 'bundle.js'
    },
    plugins: [
        new IconFontPlugin({
            svgPath: './src/icons/svg',
            fontPath: './dist/fonts',
            scssPath: './src/fonts/icons.scss',
            fontName: 'icons'
        })
    ]
};

// Create a webpack compiler instance
const compiler = webpack(config);

// Run the compiler
compiler.run((err, stats) => {
    if (err || stats.hasErrors()) {
        console.error('Error generating icon font:', err || stats.toString());
        process.exit(1);
    }
    console.log('Icon font generated successfully!');
}); 