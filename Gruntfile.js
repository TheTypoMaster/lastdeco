module.exports = function(grunt) {

   require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

   grunt.initConfig({

      pkg : grunt.file.readJSON('package.json'),

      // Checks if currently installed npm dependencies are installed in the exact same versions that are specified in package.json
      checkDependencies : {
         this : {}
      }

   });

   grunt.registerTask('build', ['checkDependencies']);

};
