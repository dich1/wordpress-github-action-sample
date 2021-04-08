const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
module.exports = {
  entry: path.resolve(__dirname, './src/js/index.js'),
  output: {
    path: path.resolve(__dirname, './dist'),
    filename: 'bundle.js',
    publicPath: '/'
  },
  devServer: {
    contentBase: path.resolve(__dirname, './src/'),
    //publicPath: '/assets/',
    watchContentBase: true,
    open: true
  },
  module: {
    rules: [{
      test: /\.js$/,
      loader: 'babel-loader',
      exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
      options: {
        presets: [
          // ES5 に変換
          "@babel/preset-env"
        ]
      }
    }, {
      test: /.(jpg|png|gif|svg)$/,
      use: {
        loader: 'file-loader',
        options: {
          name: 'img/[name].[ext]',
        }
      },
      use: ['svg-sprite-loader', 'svg-transform-loader', 'svgo-loader']
    },{
      test: /\.css/,
      use: [
        "style-loader",
        {
          loader: "css-loader",
          options: { url: false }
        }
      ]
    },
      {
      test: /\.scss$/,
      use: ["style-loader", MiniCssExtractPlugin.loader, {
        loader: "css-loader",
        options: {
          url: true,
          importLoaders: 1
        },
      }, {
        loader: "sass-loader",
        options: {
          sourceMap: true
        }
      }, {
        loader: "postcss-loader",
        options: {
          plugins: [
            require("autoprefixer")({
              browsers: ["last 2 versions", "ie >= 11", "Android >= 4"]
            })
          ]
        }
      }, 'import-glob-loader', ]
    }]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'main.css'
    })
  ]
};