var path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: [
        './js/base'
    ],
    output: {
        path: path.join(__dirname, 'scripts'),
        filename: 'bundle.js',
        publicPath: ''
    },
    devtool: "#inline-source-map",
    module: {
        loaders: [
            {
                test: /\.js$/,exclude: /node_modules/, loaders: ['babel'], include: path.join(__dirname, 'js')
            }
        ]
    }
};


