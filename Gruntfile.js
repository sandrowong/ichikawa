module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    less: {
      development: {
        options: {
          paths: ["build/css"]
        },
        files: {
          "build/css/style.css": "components/less/bootstrap.less"
        }
      },
      production: {
        options: {
          paths: ["build/css"],
          cleancss: true
        },
        files: {
          "build/css/style.min.css": ["components/less/bootstrap.less"] //,"components/css/custom.css"
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task(s).
  grunt.registerTask('default', ['less']);

};