const path = require('path')
const { merge } = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')

function resolve(dir) {
  return path.join(__dirname, '..', dir)
}

const webpackConfig = merge(baseWebpackConfig, {
  mode: 'development',
  output: {
    path: path.resolve(__dirname, '../dist'),
    filename: '[name].bundle.js'
  },
  plugins: [
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 4172,
      files: ['./*.html'],
      // Note: Uncomment it for live version
       ui: {
         port: 41683
       },
      proxy: {
        target: 'http://localhost'
      }
//      server: { baseDir: ['./'] }
    }),
    new MiniCssExtractPlugin({
      filename: '../dist/[name].css',
      chunkFilename: '[id].css'
    })
  ],
  watch: true,
  stats: 'errors-only'
})

module.exports = webpackConfig
