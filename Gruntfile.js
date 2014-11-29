module.exports = function(grunt) {

var mozjpeg = require('imagemin-mozjpeg');
  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    less: {
      // development: {
      //   options: {
      //     paths: ["build/css"]
      //   },
      //   files: {
      //     "build/css/style.css": "components/less/bootstrap.less"
      //   }
      // },
      production: {
        options: {
          paths: ["build/css"],
          cleancss: true
        },
        files: {
          "css/custom.min.css": ["css/custom.css"] //,"components/css/custom.css" "build/css/style.min.css": ["components/less/bootstrap.less"]
        }
      }
    },
  imagemin: {                          // Task
    dynamic: {                          // Target
      options: {                       // Target options
        optimizationLevel: 3,
        svgoPlugins: [{ removeViewBox: false }],
        use: [mozjpeg()]
      },
      files: [{
        expand: true,                  // Enable dynamic expansion
        cwd: 'img/Site',                   // Src matches are relative to this path
        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
        dest: 'img/Site/imagemin'                  // Destination path prefix
      }]
    }
  }
});

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', ['less'], ['imagemin']);

};