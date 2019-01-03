module.exports = {
    mode: "development",
    watch: true,
    devtool: "source-map",
    module: {
        rules: [
          { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" }
        ]
    }
}