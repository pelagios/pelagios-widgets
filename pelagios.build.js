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
            shim: {
            'jqueryui': {
                deps: ['jquery'],
             },
             'lib/jquery_pagination' : {
                deps: ['jquery']
             }
        },  
    modules: [
        {
            name: "place",
            exclude: ["jquery", "jqueryui"]
        },
        {
            name: "search",
            exclude: ["jquery", "jqueryui"]
        }
    ]
})