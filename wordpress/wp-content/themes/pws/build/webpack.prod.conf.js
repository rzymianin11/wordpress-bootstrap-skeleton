const path = require('path')
const { merge } = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const TerserPlugin = require('terser-webpack-plugin')

function resolve(dir) {
  return path.join(__dirname, '..', dir)
}

const webpackConfig = merge(baseWebpackConfig, {
  mode: 'production',
  output: {
    path: path.resolve(__dirname, '../dist'),
    filename: '[name].bundle.js'
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../dist/[name].css',
      chunkFilename: '[id].css'
    })
  ],
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()]
  }
})

module.exports = webpackConfig
