module.exports = function(grunt) {
	
	// "themeName" is set to what you want your theme folder to be named 
	// within "wp-content" > "themes" folder
	themeName = 'wordpressbasetheme';
	
	// "contentPath" sets where the "plugins", "media", "themes" and more is housed.
	contentPath = 'wordpress/wp-content/';
	
	// "pluginPath" is used to copy plugins you cannot download from the web 
	// from the "plugins" folder in the root folder
	pluginPath = '<%= contentPath %>/plugins/';
	
	// "themePath" dynamically sets a folder path to within your wordpress build
	themePath = '<%= contentPath %>/themes/<%= themeName %>/';
	
	// "BrowserSyncLocalUrl" is used to update the proxy url in the browser sync function
	browserSyncLocalUrl = 'wordpresstemplate.lan:8888'

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'theme/style.css' : 'theme/assets/scss/main.scss',
					'theme/style-editor.css' : 'theme/assets/scss/wp-editor.scss',
				}
			}
		},
		// this minifies /style.css in your root folder
		// "sass" always has to be run before "cssmin"
		cssmin: {
			target: {
				files: {
					'<%= themePath %>style.css': ['theme/style.css'],
					'<%= themePath %>style-editor.css': ['theme/style-editor.css']
				}
			}
		},
		// minifies the main.js file located in /assets/js
		uglify: {
			my_target: {
				files: {
					'theme/assets/js/main.min.js' : ['theme/assets/js/main.js']
				}
			}
		},
		// this is for use when you are developing your website so you do not have to run
		// individual commands every time you make an edit. To initiate the watch command
		// run "grunt" within terminal.
		watch: {
			css: {
				files: 'theme/**/*.scss',
				tasks: ['sass', 'sync:styleFile', 'sync:styleEditorFile']
			},
			php: {
				files: 'theme/**/*',
				tasks: ['sync:main']
			},
			acfjson: {
				files: '<%= themePath %>acf-json/**',
				tasks: ['sync:acfjson'],
			}
		},
		// syncs the above server when there is a change made to styles.css
		browserSync: {
			dist: {
				bsFiles: {
					src: [
						'<%= themePath %>**/*'
					]
				},
				options: {
					proxy: browserSyncLocalUrl,
					watchTask: true
				}
			}
		},
		// "general" removes the production folder when you go to do a new release
		// "node_mods" removes the node_modules folder after a new release is created
		clean: {
			general: ['production/'],
			node_mods: ['production/node_modules'],
			remove_default_themes: ['wordpress/wp-content/themes/twentytwentytwo','wordpress/wp-content/themes/twentytwentyone','wordpress/wp-content/themes/twentytwenty', 'wordpress/wp-content/themes/twentynineteen', 'wordpress/wp-content/themes/twentyseventeen', 'wordpress/wp-content/themes/twentysixteen'],
			removeTheme: ['<%= themePath %>'],
		},
		sync: {
			main: {
				files: [{
					cwd: 'theme',
					src: [
						'**/*.js',
						'**/*.php',
						'**/*.css'
					],
					dest: themePath,
				}],
				verbose: true,
				pretend: false,
				//failOnError: true,
				//updateAndDelete: true,
				//compareUsing: "md5" // Options "md5" or "mtime"
			},
			acfjson: {
				files: [{
					cwd: themePath + 'acf-json/',
					src: ['*'],
					dest: 'theme/acf-json/'
				}],
				verbose: true,
				pretend: false
			},
			styleFile: {
				files: [{
					cwd: themePath,
					src: ['style.css', 'style.css.map'],
					dest: 'theme/'
				}],
				verbose: true,
				pretend: false
			},
			styleEditorFile: {
				files: [{
					cwd: themePath,
					src: ['style-editor.css', 'style-editor.css.map'],
					dest: 'theme/'
				}],
				verbose: true,
				pretend: false
			}
		},
		// Copy creates a copy within the production folder after all commands are run
		copy: {
			plugins: {
				expand: true,
				cwd: 'plugins/',
				src: ['**'],
				dest: pluginPath
			},
			installAcf: {
				expand: true,
				cwd: 'plugins/advanced-custom-fields-pro',
				src: ['**'],
				dest: pluginPath + '/advanced-custom-fields-pro'
			},
			installGF: {
				expand: true,
				cwd: 'plugins/gravityforms',
				src: ['**'],
				dest: pluginPath + '/gravityforms'
			},
			theme: {
				expand: true,
				cwd: 'theme/',
				src: ['**'],
				dest: themePath
			},
			acfJson: {
				expand: true,
				cwd: 'theme/acf-json',
				src: ['**'],
				dest: themePath + '/acf-json'
			},
			pdfs: {
				expand: true,
				cwd: 'theme/assets/pdfs/',
				src: ['*'],
				dest: 'production/assets/pdfs/'
			},
			videos: {
				expand: true,
				cwd: 'theme/assets/videos/',
				src: ['*'],
				dest: 'production/assets/videos/'
			},
			vendorjs: {
				expand: true,
				cwd: 'theme/assets/js/vendor/',
				src: ['*'],
				dest: 'production/assets/js/vendor/'
			},
			fonts: {
				expand: true,
				cwd: 'theme/assets/fonts',
				src: ['*'],
				dest: 'production/assets/fonts/'
			},
			favicons: {
				expand: true,
				cwd: 'theme/',
				src: ['*'],
				dest: 'production/'
			},
			copyphp: {
				expand: true,
				cwd: 'theme/',
				src: ['**/*.php'],
				dest: 'production/',
				options: {
					process: function (content, srcpath) {
						//return content.replace(/style.css/g, 'style.min.css').replace(/main.js/g, 'main.min.js');
						return content.replace(/main.js/g, 'main.min.js');
					},
				}
			}
		}
		
	});

	// loadNpmTasks bring in required grunt modules for use within this file
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-sync');
	grunt.loadNpmTasks('grunt-browser-sync');

	// "default" is for use when developing the theme
	// "release" is for when you want your final files for deployment
	// "releasecopy" is only used within "release" and you won't use this on its own
	grunt.registerTask('default', ['serve']);
	grunt.registerTask('serve', ['clean:removeTheme', 'copy:theme', 'sass', 'cssmin', 'copy:acfJson', 'browserSync', 'watch']);
	grunt.registerTask('release', ['clean:general', 'sass', 'cssmin', 'uglify', 'releasecopy', 'clean:node_mods']);
	grunt.registerTask('releasecopy', ['copy:videos', 'copy:pdfs', 'copy:vendorjs', 'copy:fonts', 'copy:favicons', 'copy:copyphp']);
	grunt.registerTask('copyTheme', ['copy:theme', 'copy:installGF', 'copy:installAcf', 'clean:remove_default_themes', 'sass']);

}