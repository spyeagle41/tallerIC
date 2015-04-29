module.exports = function(grunt) {

	grunt.initConfig({
		    phplint: {
		        options: {
		            phpArgs: {
		                "-d": "display_errors=1"
		            },
		            cache:false
		        },
		 
		        all: ["src/**/*.php","*test/*.php","!src/vendor/**/*.php"]
		    },
		    phpunit: {
			    unittest: {
			        dir: 'unittest',
			        options:{
			        	logJunit:"build/testresults/unittest.xml",
			        	coverageClover: "build/coverage/coverage.xml",
			        	coverageHtml: "build/coverage"
			        }
			    },
			    functionaltest: {
			        dir: 'functionaltest',
			        options:{
			        	logJunit:"build/testresults/functionaltest.xml"
			        }
			    },
			    options: {
			        bin: 'src/vendor/bin/phpunit',
			        colors: true
			    }
			}
	});

	grunt.loadNpmTasks("grunt-phplint");
	grunt.loadNpmTasks("grunt-phpunit");

grunt.registerTask('default', 'My "default" task description.', function() {
     grunt.log.writeln('Currently running the "default" task.');
});


};
