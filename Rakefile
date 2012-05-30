require 'rake'

HANDLEBARS_FILES = FileList['build/template/*.handlebars']

desc 'Compile handlebars templates'
task :handlebars do
    HANDLEBARS_FILES.each do |filename|
    obj = filename.sub(/\.handlebars$/, '.tmpl')
    sh "handlebars #{filename} -f #{obj}"
    end
end 

desc 'Require.js optimisation'
task :requirejs do
    # need to empty the build directory first 
    sh "node r.js -o pelagios.build.js"
end

task :default => [:requirejs, :handlebars]