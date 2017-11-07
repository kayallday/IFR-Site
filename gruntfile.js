//gruntfile

module.exports = function(grunt) {

  //Initializing the configuration object
  grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
  sass: {
    dist: {
      options: {
        // style: 'compressed',
        sourcemap: 'none',
        noCache: true
      },
      files: [{
        expand: true,
        cwd: 'resources/assets/',
        src: ['**/*.scss'],
        dest: '../public/css',
        ext: '.css'
      }],
    },
  },
  uglify: {
    dynamic_mappings: {
      files: [
        {
          expand: true,
          cwd: '../public/css',
          src: ['**/*.css'],
          dest: '../public/css',
          ext: '.min.css'
        }
      ]

    }
  },
  cssmin:{
    dist: {
      files: [{
        expand: true,
        cwd: 'resources/assets/',
        src: ['*.scss'],
        dest: '../public',
        ext: '.css'
      }],
    }
  },
  // sass_globbing: {
  //
  // },
  concat: {

  },
  watch: {
    dist: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      }
    }
  }
});
grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-sass-globbing');
grunt.loadNpmTasks('grunt-contrib-concat');
// grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.registerTask('default',['concat','sass','cssmin','watch']);
}
