'use strict';

module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);


	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		app: 'app',
		dist: 'dist',

		sass: {
			options: {
				includePaths: ['<%= app %>/bower_components/foundation/scss']
			},
			dist: {
				options: {
					outputStyle: 'extended'
				},
				files: {
					'<%= app %>/css/app.css': '<%= app %>/scss/app.scss'
				}
			}
		},

		

		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			all: [
				'Gruntfile.js',
				'<%= app %>/js/**/*.js'
			]
		},

		clean: {
			dist: {
				src: ['<%= dist %>/*']
			},
		},
		copy: {
			dist: {
				files: [{
					expand: true,
					cwd:'<%= app %>/',
					src: ['fonts/**','!**/*.scss', '!bower_components/**', '!templates/**'],
					dest: '<%= dist %>/'
				}]
			},
		},

		imagemin: {
			target: {
				files: [{
					expand: true,
					cwd: '<%= app %>/images/',
					src: ['**/*.{jpg,gif,svg,jpeg,png}'],
					dest: '<%= dist %>/images/'
				}]
			}
		},

		uglify: {
			options: {
				preserveComments: 'some',
				mangle: false
			}
		},

		useminPrepare: {
			html: ['<%= app %>/index.html'],
			options: {
				dest: '<%= dist %>'
			}
		},

		usemin: {
			html: ['<%= dist %>/**/*.html', '!<%= app %>/bower_components/**'],
			css: ['<%= dist %>/css/**/*.css'],
			options: {
				dirs: ['<%= dist %>']
			}
		},

		watch: {
			grunt: {
				files: ['Gruntfile.js'],
				tasks: ['sass']
			},
			sass: {
				files: '<%= app %>/scss/**/*.scss',
				tasks: ['sass']
			},
			assemble: {
				files: '<%= app %>/templates/**/*.hbs',
				tasks: ['newer:assemble']
			},
			livereload: {
				files: [
				'<%= app %>/**/*.html', 
				'!<%= app %>/bower_components/**', 
				'<%= app %>/js/**/*.js', 
				'<%= app %>/css/**/*.css', 
				'<%= app %>/images/**/*.{jpg,gif,svg,jpeg,png}'
				],
				options: {
					livereload: true
				}
			}
		},

		connect: {
			app: {
				options: {
					port: 9000,
					base: '<%= app %>/',
					open: true,
					livereload: true,
					hostname: '0.0.0.0'
				}
			},
			dist: {
				options: {
					port: 9001,
					base: '<%= dist %>/',
					open: true,
					keepalive: true,
					livereload: false,
					hostname: '127.0.0.1'
				}
			}
		},



		wiredep: {
			target: {
				src: [
					'<%= app %>/**/*.html'
				],
				exclude: [
					'modernizr',
					'jquery-placeholder',
					'jquery.cookie',
					'foundation'
				]
			}
		},

		sprite:{
	      all: {
	        src: '<%= app %>/images/sprites/*.png',
	        destImg: '<%= app %>/images/sprites.png',
	        destCSS: '<%= app %>/css/sprites.css'
	      }
  		},


	  autoprefixer: {

	    options: {
	      // Task-specific options go here.
	    },

	    // prefix all files
	    multiple_files: {
	      expand: true,
	      flatten: true,
	      src: '<%= app %>/css/*.css', // -> src/css/file1.css, src/css/file2.css
	      dest: '<%= app %>/css/prefix/' // -> dest/css/file1.css, dest/css/file2.css
	    }

	    // if you have specified only the `src` param, the destination will be set automatically,
	    // so source files will be overwritten
	    // no_dest: {
	    //   src: 'dest/css/file.css' // globbing is also possible here
	    // },
	  },

	   browserSync: {
            dev: {
                bsFiles: {
                    src : '<% app %>/css/*.css'
                },
                options: {
                    watchTask: true // < VERY important
                }
            }
        },

        assemble: {
            options: {
                flatten: true,
                layout: '<%= app %>/templates/layouts/default.hbs',
                partials: '<%= app %>/templates/partials/*.hbs'
            },
            pages: {
                files: {
                    '<%= app %>': ['<%= app %>/templates/pages/*.hbs', '!<%= app %>/templates/pages/index.hbs']
                }
            },
            index: {
                files: {
                    '<%= app %>': ['<%= app %>/templates/pages/index.hbs']
                }
            }
        },


	});


 grunt.loadNpmTasks('grunt-spritesmith');
 grunt.loadNpmTasks('grunt-autoprefixer');
 grunt.loadNpmTasks('grunt-browser-sync');
 grunt.loadNpmTasks('assemble');
 grunt.loadNpmTasks('grunt-newer');	


	grunt.registerTask('compile-sass', ['sass']);
	grunt.registerTask('bower-install', ['wiredep']);
	
	grunt.registerTask('default', ['compile-sass', 'newer:assemble', 'bower-install', 'connect:app', 'watch']);
	grunt.registerTask('sync', ['compile-sass', 'bower-install', 'browserSync:dev', 'connect:app', 'watch']);

	grunt.registerTask('validate-js', ['jshint']);
	grunt.registerTask('server-dist', ['connect:dist']);
	grunt.registerTask('img', ['sprite']);
	grunt.registerTask('prefix', ['autoprefixer']);
	
	grunt.registerTask('publish', ['compile-sass', 'clean:dist', /*'validate-js',*/ 'useminPrepare', 'copy:dist', 'newer:imagemin', 'concat', 'cssmin', 'uglify', 'usemin']);

};
