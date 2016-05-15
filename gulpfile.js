var gulp = require("gulp");
var sass = require("gulp-sass");
var browserSync = require("browser-sync");
var connect = require("gulp-connect-php");


// gulp.task('serve', ['sass'], function(){
// 	browserSync.init({
// 		server: "./"
// 	});

// 	// gulp.watch("./scss/*.scss", ['sass', 'sass-minify']).on('change', browserSync.reload);
// 	gulp.watch("./*.html").on('change', browserSync.reload);
// 	gulp.watch("./css/*.css").on('change', browserSync.reload);

// });


gulp.task('connect-sync', function(){
	connect.server({}, function(){
		browserSync({
			proxy: '127.0.0.1:8000'
		});
	});

	gulp.watch("./css/*.css").on('change', browserSync.reload);
	gulp.watch('**/*.php').on('change', function(){
		browserSync.reload();
	});
});





gulp.task('sass', function(){
	gulp.src('./scss/**.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./css/'))
});

gulp.task('sass-minify', function(){
	gulp.src('./scss/**.scss')
	.pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
	.pipe(gulp.dest('./css/min/'));
});




gulp.task('watch', function(){
	gulp.watch('scss/**/*.scss', ['sass', 'sass-minify']);
});

gulp.task('default', ['connect-sync', 'watch'], function(){
	
});