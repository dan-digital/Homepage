module.exports = function(grunt) {

    grunt.initConfig({
    	
        pkg: grunt.file.readJSON('package.json'),

		watch: {
			options: {
				livereload: true,
				spawn: false
			},
		    app: {
		    	files: ['index.html'],
		    },
		    styles: {
		    	files: ['css/**/*.scss'],
		    	tasks: ['sass', 'autoprefixer'],
		    },
		    scripts: {
		    	files: ['js/**/*.js']
		    }
		},

		sass: {
			options: {
				style: 'compressed'
			},
			main: {
				files: {
					'css/build/main.min.css' : 'css/main.scss'
				}
			}
		},

		autoprefixer: {
			all: {
				src: 'css/build/**/*.css'
			}
		}

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');

    grunt.registerTask('default', ['sass', 'autoprefixer', 'watch']);

};