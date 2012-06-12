({
    appDir: "src",
    baseUrl: ".",
    dir: "build",
    
    optimizeCss: "standard",

    // inlining ftw
    inlineText: true,   
    optimizeAllPluginResources: true,
    
    paths: {
        "jquery": "empty:",
    },
    modules: [
        {
            name: "place"
        },
        {
            name: "search"
        }
    ]
})