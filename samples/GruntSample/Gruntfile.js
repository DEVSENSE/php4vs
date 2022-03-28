/// <binding ProjectOpened='default, build' />
/*
This file in the main entry point for defining grunt tasks and using grunt plugins.
Click here to learn more. http://go.microsoft.com/fwlink/?LinkID=513275&clcid=0x409
*/
module.exports = function (grunt) {
    grunt.initConfig({

        uglify: {
            options: {
                mangle: true, //Shorten variable names, where possible
                compress: true, //Remove Unnecessary whitespaces
                banner: "/*Minified version of site.js*/\n" //Banner Property at the top of minified version
            },
            target: {
                src: "assets/js/site.js",
                dest: "public/js/site.min.js",
            }
        },

        cssmin: {
            target: {
                src: ["assets/css/styles.css"],
                dest: "public/css/styles.min.css"
            }
        },

        watch: {
            files: ["assets/**/*.*"],
            tasks: ["build"]
        }

    });

    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask("default", ["watch"]);
    grunt.registerTask('build', ['uglify','cssmin'])
};