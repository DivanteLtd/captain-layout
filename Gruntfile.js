'use strict';

module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt);
    grunt.initConfig( config() );
    grunt.registerTask('default', ['php', 'watch']);

    function config () {
        return {
            // To enable livereload, install livereload extension for your browser.
            watch: {
                grunt: {
                    files: ['Gruntfile.js']
                },
                livereload: {
                    files: ['**/*.php'],
                    tasks: ['php'],
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
            }
        };
    }

};