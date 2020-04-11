import Validation from "./components/Validation";

require('./bootstrap');

class App {

    constructor() {
        this.boot()
    }

    boot() {
        new Validation();
    }
}

$(document).ready(function(){
    new App();
});
