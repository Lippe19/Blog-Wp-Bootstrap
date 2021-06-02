var gulp = require('gulp');
var sass = require('gulp-sass');

//tarefa que transforma os arquivos scss (style.scss e bootstrap) em um arquivo css
gulp.task('sass', gulp.series( function(){
	//array de onde esta os arquivos scss
	return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
	.pipe(sass())//converter o sass em css
	.pipe(gulp.dest('src/css'));//destino da conversão 
}));

//altera as tarefas automaticamente 
gulp.task('watch', gulp.series( function(){
	gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], gulp.parallel( ['sass'] ));
}));

//faz com que seja necessário apenas digitar "gulp" para executar todas as tarefas acima
gulp.task('default', gulp.series( ['sass', 'watch'] ));
