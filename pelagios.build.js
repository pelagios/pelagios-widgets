({
    appDir: "src",
    baseUrl: ".",
    dir: "build",
    
    optimizeCss: "standard",
    inlineText: true,   
    optimizeAllPluginResources: true,
    
    paths: {
        "jquery": "empty:",
        "jqueryui": "empty:"
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