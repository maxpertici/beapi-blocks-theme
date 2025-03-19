const chalk = require('chalk')
const path = require('path')
const fs = require('fs')

const logId = '[' + chalk.blue('WebpackThemeJsonPlugin') + ']'

class WebpackThemeJsonPlugin {
  constructor(options) {
    // folders
    this._themeFolder = path.resolve(__dirname, '../src/theme') + '/'

    if (options.watch) {
      fs.watch(this._themeFolder, () => {
        this.generateThemeJson()
      })
    }

    this.generateThemeJson()
  }

  /**
   * apply
   */
  apply() {}

  /**
   * Generate image-sises.json and image-location.json
   */
  generateThemeJson() {
    const jsonFiles = fs.readdirSync(this._themeFolder, { withFileTypes: true })
    const themeJson = {}

    function isPlainObject(o) {
      return o?.constructor === Object || Object.getPrototypeOf(o ?? 0) === null
    }

    function extend() {
      const args = arguments
      const firstArgIsBool = typeof args[0] === 'boolean'
      const deep = firstArgIsBool ? args[0] : false
      const start = firstArgIsBool ? 1 : 0
      const rt = isPlainObject(args[start]) ? args[start] : {}

      for (let i = start + 1; i < args.length; i++) {
        for (let prop in args[i]) {
          if (deep && isPlainObject(args[i][prop])) {
            rt[prop] = extend(true, {}, rt[prop], args[i][prop])
          } else if (typeof args[i][prop] !== 'undefined') {
            rt[prop] = args[i][prop]
          }
        }
      }

      return rt
    }

    jsonFiles.forEach((file) => {
      if (file.isFile() && file.name.endsWith('.json')) {
        let json = fs.readFileSync(this._themeFolder + file.name, 'utf8')

        try {
          json = JSON.parse(json)
        } catch (e) {
          console.error(logId, 'Error parsing JSON file:', file.name)
        }

        if (isPlainObject(json)) {
          extend(true, themeJson, json)
        } else {
          console.error(logId, 'Invalid JSON file:', file.name)
        }
      }
    })

    fs.writeFileSync(path.resolve(__dirname, '../theme.json'), JSON.stringify(themeJson, null, 2))
    console.log(logId, 'JSON files successfully generated !')

    return this
  }
}

module.exports = WebpackThemeJsonPlugin
