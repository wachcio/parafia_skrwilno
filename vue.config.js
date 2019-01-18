module.exports = {
   publicPath:
      process.env.NODE_ENV === "production" ? "/parafia_skrwilno/" : "/",
   configureWebpack: {
      devtool:
         process.env.NODE_ENV === "production"
            ? ""
            : "cheap-module-eval-source-map"
   }
};
