module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),  /** Where the package file is that points to all the modules **/

		/** Sass **/
		sass: {  
		  dev: {
		    options: {
		      style: 'expanded',
		      sourcemap: 'none',
		    },
		    files: {
		      'complied/style-human.css': 'scss/style.scss'
		  }
		},
		
		dist: {
			options: {
				style: 'compressed',
			},
			files: {
				'style.css': 'scss/style.scss'
			}
		}
	},
		
	  	/** Watch **/
		watch: {
			css: {
				files: '**/*.scss',  /** Whenever something happens to a file with a .scss extension, do the following task **/
				tasks: ['sass'] 
			}
		}

	});
	
	/** Load the task runners **/
	
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');  
	grunt.registerTask('default',['watch']);  /** Sets the default 'Grunt" task to watch **/
}