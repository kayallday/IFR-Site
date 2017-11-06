//gruntfile

module.exports = function(grunt) {

  //Initializing the configuration object
  grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
  sass: {
    dist: {
      files: {
        'style/style.css' : 'sass/style.scss'
      }
    }
  },
  watch: {
    css: {
      files: '**/*.scss',
      tasks: ['sass','uglify']
    }
  }
});
grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.registerTask('default',['watch']);
}
