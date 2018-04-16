/*!
 * Meetmotor
 * Copyright 2017 Tim Töws
 * Author: Tim Töws
 */

module.exports = function (grunt) {
	'use strict';

	grunt.util.linefeed = '\n';

	grunt.initConfig({
		sass: {
			dist : {
				options: {
					sourceMap: true
				},
				src: 'stylesheets/website.scss',
				dest: 'dist/stylesheets/website.css'
			}
		},
		postcss: {
			dist : {
				options: {
					map: true,
					processors: [
						require('autoprefixer')({ browsers: 'last 2 version, IE 9' }),
						require('cssnano')({ discardComments: { removeAll: true } })
					]
				},
				src: 'dist/stylesheets/website.css',
				dest: 'dist/stylesheets/website.min.css'
			}
		},
		copy: {
			fonts : {
				files: [
					{ expand: true, src: ['fonts/**/*.{ttf,eot,woff,woff2,svg}', '!node_modules/**'], dest: 'dist' },
					{ expand: true, src: ['vendors/**/*.{ttf,eot,woff,woff2,svg}', '!node_modules/**'], dest: 'dist/fonts' }
				]
			},
			images : {
				files: [
					{ expand: true, src: ['images/**/*.{png,jpg,jpeg,gif,tiff,bmp,svg}', '!node_modules/**'], dest: 'dist' },
					{ expand: true, src: ['vendors/**/*.{png,jpg,jpeg,gif,tiff,bmp,svg}', '!node_modules/**'], dest: 'dist/images' }
				]
			},
			js : {
				files: [
					{ expand: true, src: ['javascripts/**/*.js', '!node_modules/**'], dest: 'dist' },
					{ expand: true, src: ['vendors/**/*.js', '!node_modules/**'], dest: 'dist/javascripts' }
				]
			}
		},

		clean: {
			dist: ['dist']
		},

		watch: {
			sass : {
				files : ['**/*.scss', '!dist/**'],
				tasks: ['sass', 'postcss']
			},
			fonts : {
				files : ['**/*.{eot,svg,ttf,woff,woff2}', '!dist/**'],
				tasks: ['copy:fonts']
			},
			images : {
				files : ['**/*.{png,jpg,jpeg,gif,tiff,bmp,svg}', '!dist/**'],
				tasks: ['copy:images']
			},
			js : {
				files : ['**/*.js', '!dist/**', '!**/Gruntfile.js'],
				tasks: ['copy:js']
			}
		}
	});

	grunt.registerTask('compile', ['clean', 'sass', 'postcss', 'copy']);
	grunt.registerTask('watch', ['watch']);

	require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });
};
