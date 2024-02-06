const { merge } = require('webpack-merge')
const common = require('./webpack.common.js')
const plugins = require('./plugins')
const loaders = require('./loaders')
const mode = 'production'

module.exports = (env) => {
  const bs = env.bs || false
  const analyzer = env.analyzer || false
  return merge(common, {
    mode: mode,
    stats: 'minimal',
    output: {
      filename: '[name]-min.js',
    },
    optimization: {
      concatenateModules: true,
    },
    plugins: plugins.get(mode, bs, analyzer),
    module: {
      rules: loaders.get(mode),
    },
  })
}
