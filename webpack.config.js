/**
 * CHANGE THEME FOLDER NAME
 */
const themeFolderName = 'ecommercetheme'

/**
 * GET CURRENT TASK (DEV or BUILD)
 */
const currentTask = process.env.npm_lifecycle_event

/**
 * REQUIRED PACKAGES
 */
const path = require("path")
const MiniCssExtractPlugin = require("mini-css-extract-plugin")
const { CleanWebpackPlugin } = require("clean-webpack-plugin")
const ManifestPlugin = require("webpack-manifest-plugin")
const postCSSPlugins = [
    require("postcss-import"),
    require("postcss-mixins"),
    require("postcss-simple-vars"),
    require("postcss-nested"),
    require("postcss-hexrgba"),
    require("postcss-color-function"),
    require("autoprefixer")
]

/**
 * HANDLE CSS FILES
 */
let cssConfig = {
    test: /\.css$/i,
    use: ["css-loader?url=false", { loader: "postcss-loader", options: { plugins: postCSSPlugins } }]
}

/**
 * THE MAIN CONFIG
 */
let config = {
    entry: {
        main: "./assets/src/js/main.js",
    },
    plugins: [],
    module: {
        rules: [
        cssConfig,
        {
            test: /\.js$/,
            exclude: /(node_modules)/,
            use: {
            loader: "babel-loader",
            options: {
                presets: ["@babel/preset-react", ["@babel/preset-env", { targets: { node: "12" } }]]
            }
            }
        }
        ]
    }
}

/**
 * EXCUTE IN DEVELOPMENT MODE
 */
if (currentTask == "dev") {
    config.devtool = "source-map"
    cssConfig.use.unshift("style-loader")
    config.output = {
        filename: "bundled.js",
        publicPath: "http://localhost:3000/"
    }
    config.devServer = {
        before: function (app, server) {
        /*
            If you want the browser to also perform a traditional refresh
            after a save to a JS file you can modify the line directly
            below this comment to look like this instead. 
        */
        // server._watch(["./**/*.php", "./**/*.js"])
        server._watch(["./**/*.php", "!./functions.php"])
        },
        public: "http://localhost:3000",
        publicPath: "http://localhost:3000/",
        disableHostCheck: true,
        contentBase: path.join(__dirname),
        contentBasePublicPath: "http://localhost:3000/",
        hot: true,
        port: 3000,
        headers: {
        "Access-Control-Allow-Origin": "*"
        }
    }
    config.mode = "development"
}

/**
 * EXCUTE IN PRODUCTION MODE
 */
if (currentTask == "build") {
    cssConfig.use.unshift(MiniCssExtractPlugin.loader)
    postCSSPlugins.push(require("cssnano"))
    config.output = {
        publicPath: `/wp-content/themes/${themeFolderName}/assets/dist/bundled-assets/`,
        filename: "[name].js",
        chunkFilename: "[name].js",
        path: path.resolve(__dirname, "assets/dist/bundled-assets")
    }
    config.mode = "production"
    config.optimization = {
        splitChunks: { chunks: "all" }
    }
    config.plugins.push(new CleanWebpackPlugin(), new MiniCssExtractPlugin({ filename: "[name].css" }), new ManifestPlugin({ publicPath: "" }) )
}

module.exports = config