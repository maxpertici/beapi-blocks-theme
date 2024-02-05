const path = require('path')
const { merge } = require('webpack-merge')
const common = require('./webpack.common.js')
const plugins = require('./plugins')
const loaders = require('./loaders')
const mode = 'development'

module.exports = (env) => {
  const bs = env.bs || false
  return merge(common, {
    mode: mode,
    stats: 'errors-only',
    devtool: 'inline-source-map',
    devServer: {
      contentBase: path.join(__dirname, 'public'),
    },
    plugins: plugins.get(mode, bs),
    module: {
      rules: loaders.get(mode),
    },
  })
}
