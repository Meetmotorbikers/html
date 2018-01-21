
/*!
 * Meetmotor
 * Copyright 2017 Tim Töws
 * Author: Tim Töws
 */

module.exports = function (grunt) {
	'use strict';

	// Force use of Unix newlines
	grunt.util.linefeed = '\n';

	// Project configuration.
	grunt.initConfig({

		sass: {
			compileWebsite: {
				src: 'stylesheets/website.scss',
				dest: 'dist/stylesheets/website.css'
			}
		},

		cssmin: {
			options: {
				keepSpecialComments: 0,
				sourceMap: true,
				advanced: false
			},
			minifyWebsite: {
				src: 'dist/stylesheets/website.css',
				dest: 'dist/stylesheets/website.min.css'
			}
		},

		copy: {
            fonts: {
                files: [
                    { expand: true, cwd: 'fonts', src: ['**/*.{ttf,eot,woff,woff2,svg}'], dest: 'dist/fonts/vendors/' }
                ]
            },
			images: {
				files: [
					{ expand: true, cwd: 'vendors', src: ['**/*.{png,jpg,jpeg,svg,gif,ico}'], dest: 'dist/images/vendors/' },
					{ expand: true, cwd: 'images', src: ['**/*.{png,jpg,jpeg,svg,gif,ico}'], dest: 'dist/images/' }
				]
			},
			js: {
				files: [
					{ expand: true, cwd: 'vendors', src: ['**/*.js', '!**/Gruntfile.js'], dest: 'dist/javascripts/vendors/' },
					{ expand: true, cwd: 'javascripts', src: ['**'], dest: 'dist/javascripts/' }
				]
			}
		},

		clean: {
			options: {
				force : true
			},
			less: {
				src: ['dist/stylesheets']
			},
			js: {
				src: ['dist/javascripts']
			},
			images: {
				src: ['dist/images']
			},
			fonts: {
				src: ['dist/fonts']
			}
		},


		watch: {
			sass: {
				files: ['stylesheets/**/*.scss', 'javascripts/**/*.js', 'images/**/*.{png,jpg,jpeg,svg,gif,ico}'],
				tasks: 'compile'
			},
			css : {
				files : ['dist/stylesheets/website.css'],
				tasks: ['cssmin'],
				options : {
					livereload: {
						host: 'localhost',
						port: 1337
					}
				}
			},
			copy: {
				files : ['javascripts/**/*.js', 'images/**/*.{png,jpg,jpeg,svg,gif,ico}', 'fonts/**/*.{ttf,eot,woff,woff2,svg}'],
				tasks: ['newer:copy'],
				options: {
					event: ['added', 'changed'],
					livereload: {
						host: 'localhost',
						port: 1337
					}
				}
			},
			removedJS : {
				files : ['javascripts/**/*.js'],
				tasks: ['clean:js', 'copy:js'],
				options: {
					event: ['deleted'],
					livereload: {
						host: 'localhost',
						port: 1337
					}
				}
			},
			removedImages : {
				files : ['images/**/*.{png,jpg,jpeg,svg,gif,ico}'],
				tasks: ['clean:images', 'copy:images'],
				options: {
					event: ['deleted'],
					livereload: {
						host: 'localhost',
						port: 1337
					}
				}
			},
			removedFonts : {
				files : ['fonts/**/*.{ttf,eot,woff,woff2,svg}'],
				tasks: ['clean:fonts', 'copy:fonts'],
				options: {
					event: ['deleted'],
					livereload: {
						host: 'localhost',
						port: 1337
					}
				}
			}


		}

	});

	// compile tasks
	grunt.registerTask('compile', ['clean', 'newer:sass', 'newer:cssmin', 'newer:copy']);

	// watch tasks
	grunt.registerTask('watch', ['watch']);

	// These plugins provide necessary tasks.
	require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });
};
