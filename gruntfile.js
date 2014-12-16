module.exports = function(grunt) {

    grunt.initConfig({
    	
        pkg: grunt.file.readJSON('package.json'),

        concat: {
        	admin: {
        		src: ['www/js/admin/app.js', 'www/js/admin/**/*.js'],
        		dest: 'www/js/build/dd-admin.js'
        	}
        },

        uglify: {
        	admin: {
        		files: {
        			'www/js/build/dd-admin.min.js': 'www/js/build/dd-admin.js'
        		} 
        	}
        },

		watch: {
			options: {
				livereload: true
			},
		    app: {
		    	files: ['application/**', 'system/**', 'www/index.php'],
		    	options: {
		    		spawn: false
		    	}
		    },
		    styles: {
		    	files: ['www/css/**/*.scss'],
		    	tasks: ['sass', 'autoprefixer'],
		    	options: {
		    		spawn: false
		    	}
		    },
		    scripts: {
		    	files: ['www/js/**/*.js'],
		    	tasks: ['concat', 'uglify'],
		    	options: {
		    		spawn: false
		    	}
		    }
		},

		sass: {
			options: {
				style: 'compressed'
			},
			admin: {
				files: {
					'www/css/build/admin.min.css' : 'www/css/admin/main.scss'
				}
			}
		},

		autoprefixer: {
			all: {
				src: 'www/css/build/**/*.css'
			}
		}

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');

    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'autoprefixer', 'watch']);

};