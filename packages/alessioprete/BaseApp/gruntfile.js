//File grunt di esempio
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        //Configurazione per il plugin di concatenazione
        concat: {
            dist: {
                src: [
                    'src/public/packages/alessioprete/base/js/bundle.js' , //jQuery deve essere caricato per primo
                ],
                dest: 'js/build/production.js', //File di destinazione
            }
        }
    });
    // Specifichiamo quali plugin usare
    grunt.loadNpmTasks('grunt-contrib-concat');
    //Specifichiamo quali compiti eseguire
    grunt.registerTask('default', ['concat']);
};
