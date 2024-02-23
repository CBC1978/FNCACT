$('#style-1 tr').click(function (event) {
    if (event.target.type !== 'checkbox') {
        $(':checkbox', this).trigger('click');
    }
});


setTimeout(function () {
        $("div.alert").remove();
    },5000);


$('#btnUpdate').click(function (){
    var checks = document.querySelectorAll('#input_check');
    var data = [];

    // Verify if checkboxes are checked
    checks.forEach(event => {
        if(event.checked){
            data.push(event);
        }
    });

    if(data.length == 0){
        Swal.fire({
            title: 'Erreur',
            text: 'Aucune ligne sélectionnée',
            icon: 'error',
        });
    }

    if( data.length == 1){

        window.location.href = "utilisateur/modifier/"+data[0].value;
    }

    if( data.length >= 2){
        Swal.fire({
            title: 'Erreur',
            text: 'Sélectionnez une seule ligne',
            icon: 'error',
        });
    }
})

/*$('#btnUpdateSave').click(function(){
var olPassword = password
    if (password.isEmpty && password==cpassword) {
        fetch('utilisateur/')
    }
    if (condition) {

    }

}); */

$('#btnDelete').click(function (){
    var checks = document.querySelectorAll('#input_check');
    var data = [];

// Verify if checkboxes are checked
    checks.forEach(event => {
        if(event.checked){
            data.push(event);
        }
    });

    if(data.length == 0){
        Swal.fire({
            title: 'Erreur',
            text: 'Aucune ligne sélectionnée',
            icon: 'error',
        });
    }

    if( data.length  != 0){
        Swal.fire({
             title: "Voulez vous vraiment supprimez ?",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Supprimer",
            denyButtonText: "Annuler",
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                data.forEach(item =>{
                    fetch('/utilisateur/supprimer-utilisateur/'+item.value)
                        .then( response => response.json() )
                        .then( response => {
                            if(response == 0){
                                Swal.fire({
                                    title: 'Bravo',
                                    text: 'L\*utilisateur a été supprimé avec succès',
                                    icon: 'success',
                                });
                            } else if( response == 1){
                                Swal.fire({
                                    title: 'Erreur',
                                    text: 'Vous n\'êtes pas autorisé à supprimer l\'utilisateur',
                                    icon: 'error',
                                });
                            }
                        });
                });
                setTimeout(function () {
                    location.reload();
                }, 5000); //5s
                // refresh page
            }
        });
    }
});


// var e;
c1 = $('#style-1').DataTable({

    "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
    "oLanguage": {
        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
        "sInfo": "Afficher page _PAGE_ sur _PAGES_ de _TOTAL_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Rechercher...",
        "sLengthMenu": "Afficher :  _MENU_",
    },
    "lengthMenu": [5, 10, 20, 50,100],
    "pageLength": 10
});
multiCheck(c1);
