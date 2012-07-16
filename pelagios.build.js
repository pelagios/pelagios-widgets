({
    appDir: "src",
    baseUrl: ".",
    dir: "build",
    
    optimizeCss: "standard",
    inlineText: true,   
    optimizeAllPluginResources: true,
    
    paths: {
        "jquery": "empty:",
        "jqueryui": "empty:",
        requireLib: 'lib/require'
    },
    
    namespace: "pelagios",
    
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
            name: "pelagios",
            include: ["requireLib", "place", "search"],
            create: true
        },
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