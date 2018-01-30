module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		/**
		* Sass Task
		*/
		sass: {
			dist: {
				options: {
					style: 'expanded',
					sourcemap: 'auto',
				},
				files: {
					'compiled/style.css': 'scss/style.scss'
				}
			}
		},
		/**
		* Compile JS files
		*/
	    concat: {
	      options: {
	        stripBanners: true
	      },
	      js : {
	        files: {
	          'compiled/base.js':
	          [
	            'js/*.js',
	          ]
	        }
	      }
	    },
		/**
		* Minify compiled JS file
		*/
	    uglify : {
	      js: {
	        files: {
	          'compiled/base.min.js': ['compiled/base.js'],
	        }
	      }
	    },
		/**
		* Autoprefixer
		*/
		autoprefixer: {
			options: {
				browsers: ['last 4 versions'],
				map: true,
			},
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'compiled/*.css',
				dest: 'css/',
			}
		},
		/**
		* Watch Task
		*/
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'autoprefixer']
			},
			js: {
				files: 'js/*.js',
				tasks: ['concat', 'uglify']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default', ['watch']);
}