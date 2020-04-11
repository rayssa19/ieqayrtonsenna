export default class Validation {
    constructor()
    {
        this.classForm = $('.form-download-email');
        this.boot();
    }

    boot()
    {
        this.formCelula();
    }


    formCelula() {
        $(function() {
            $("form[name='form-register']").validate({
                rules: {
                    cell: "required",
                    name: "required",
                    viceleader: "required",
                    host: "required",
                    secretary: "required"

                },
                messages: {
                    cell: "Por favor, insira o nome da célula",
                    name: "Por favor, insira o nome do líder",
                    viceleader: "Por favor, insira o nome do vice-líder",
                    host: "Por favor, insira o nome do anfitrião",
                    secretary: "Por favor, insira o nome do secretário(a)"

                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });


    }
}
