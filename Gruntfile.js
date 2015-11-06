'use strict';

module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt);
    grunt.initConfig( config() );
    grunt.registerTask('default', ['sass', 'php', 'watch']);
    grunt.registerTask('compile-sass', ['sass']);

    function config () {
        return {
            // To enable livereload, install livereload extension for your browser.
            watch: {
                grunt: {
                    files: ['Gruntfile.js'],
                    tasks: ['sass']
                },
                sass: {
                    files: 'app/scss/*.scss',
                    tasks: ['sass']
                },
                livereload: {
                    files: ['**/*.php', 'app/assets/css/*.css'],
                    options: {
                        livereload: true
                    }
                }
            },
            php: {
                watch: {
                    options: {
                        base: 'app',
                        port: 5000,
                        open: true
                    }
                }
            },
            sass: {
                dist: {
                    files: { 'app/assets/css/main.css' : 'app/scss/main.scss' }
                },
                options: {
                    sourceMap: false,
                    outputStyle: 'compressed'
                }
            }
        };
    }

};