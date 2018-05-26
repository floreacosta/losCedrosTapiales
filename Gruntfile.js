/*
 * NOTE: Grunt tasks
 */

module.exports = gruntTask;

function gruntTask (grunt) {
  require('load-grunt-tasks')(grunt);
  let task = {
    pkg: grunt.file.readJSON('package.json'),
    compass: {
      dist: {
        options: {
          config: 'config.rb'
        }
      }
    },
    watch: {
      files: ['scss/*', 'scss/common/*', 'scss/common/**/*', 'scss/components/**/*'],
      tasks: ['compass']
    },
    babel: {
      options: {
        sourceMap: true,
        presets: ['env']
      },
      dist: {
        files: {
          'js/query.js': ['js/script/query.js']
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'js/query.min.js': ['js/query.js']
        }
      }
    }
  };

  grunt.initConfig(task);
  grunt.registerTask('start', ['compass', 'watch']);
  grunt.registerTask('build', ['compass', 'babel', 'uglify']);
};
