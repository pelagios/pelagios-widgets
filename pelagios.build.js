({
    appDir: "src",
    baseUrl: ".",
    dir: "build",  
    
    optimize: "none",
    optimizeCss: "standard",
    inlineText: true,   
    optimizeAllPluginResources: true,
    
    paths: {
        "jquery": "empty:",
        "jqueryui": "empty:",
        "requireLib": "lib/require"
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
            include: ["place", "requireLib"],
            exclude: ["jquery", "jqueryui"],
            create: true
        },
        {
            name: "search",
            include: ["search", "requireLib"],
            exclude: ["jquery", "jqueryui"],
            create: true
        }
    ]
})