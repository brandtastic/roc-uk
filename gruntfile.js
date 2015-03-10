module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    'js/dev/*.js'
                ],
                dest: 'js/production.js',
            }
        },
        uglify: {
            build: {
                src: 'js/production.js',
                dest: 'js/production.min.js'
            }
        },
        sass: {                              // Task
			dist: {                            // Target
			  options: {                       // Target options
				style: 'compressed'
			  },
			  files: {                         // Dictionary of files
				'style.css': 'stylesheets/dev/master.scss',       // 'destination': 'source'
			  }
			}
		  },
		autoprefixer: {
			options: {
			  // Task-specific options go here.
			},
			// prefix the specified file
			single_file: {
			  options: {
				// Target-specific options go here.
			  },
			  src: 'style.css',
			  dest: 'style.css'
			},
		  },
		  watch: {
			scripts: {
				files: ['js/dev/**/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			},
			css: {
				files: ['stylesheets/**/*.scss'],
				tasks: ['sass', 'autoprefixer'],	
			}
		},
		git_deploy: {
		    your_target: {
		      options: {
		        url: 'git@github.com:BennyHudson/cineresource.git'
		      },
		      src: 'cine-theme'
		    },
		  },
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'autoprefixer', 'watch']);

};
