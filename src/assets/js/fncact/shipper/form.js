
    $('#style-1 tr').click(function (event) {
    if (event.target.type !== 'checkbox') {
    $(':checkbox', this).trigger('click');
}
});
    $('#style-2 tr').click(function (event) {
    if (event.target.type !== 'checkbox') {
    $(':checkbox', this).trigger('click');
}
});

    //Hide/Show field products
    $('#field_import').hide();
    $('#field_export').hide();
    var select_operation = $('.operation');
    $('#field_import').show();
    $('#field_export').hide();
    (select_operation).change(function(){
    if(this.value == 'import'){
    $('#field_import').show();
    $('#field_export').hide();
}
    if(this.value == 'export'){
    $('#field_export').show();
    $('#field_import').hide();
}
    if(this.value == 'import/export'){
    $('#field_import').show();
    $('#field_export').show();
}
});

    var j=1;
    var data = [];

    // Product import
    $('#btn_add_product_import').click(function (){

    var input_checkboxes =document.querySelectorAll('#input_check_import');
    var code_product = document.querySelectorAll('#code_product');
    var libelle_product = document.querySelectorAll('#libelle_product');

    for(var i=0; i < input_checkboxes.length;i++){
    if(input_checkboxes[i].checked){
    var item = {
    'id':input_checkboxes[i].value,
    'code':code_product[i].textContent,
    'libelle':libelle_product[i].textContent,
};
    data.push(item)
}
}

    data.forEach(item =>{
    var newRow = `
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Produit ${j}</label>
                        <div class="input-group has-validation">
                                <span class="input-group-text" id="remove_product">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </span>
                            <input type="text" class="form-control" id="validationCustomUsername"  value="${item.libelle}">
                            <input type="hidden" class="form-control" id="product_import"  value="${item.id}">
                        </div>
                    </div>`;
    $('#wrapper_product_import').append(newRow);
    j++;
});
    //
    data = [];
    input_checkboxes.forEach(item =>{
    if(item.checked)
    item.checked = false;
});
    $('.bd-product-modal-import').modal('hide');
});

    $('#wrapper_product_import').on("click","#remove_product", function(e){ //user click on remove text
    j--;
    e.preventDefault(); $(this).parent('div').parent('div').remove();
});
    // End Product Import
    var k=1;
    // Product Export
    var btn_add_product = $('#btn_add_product_export');
    var wrapper_product = $('#wrapper_product_export');
    $(btn_add_product).click(function (){

    var input_checkboxes = document.querySelectorAll('#input_check');
    var code_product = document.querySelectorAll('#code_product');
    var libelle_product = document.querySelectorAll('#libelle_product');

    for(i = 0; i< input_checkboxes.length; i++){
    if(input_checkboxes[i].checked){
    var item = {
    'id':input_checkboxes[i].value,
    'code':code_product[i].textContent,
    'libelle':libelle_product[i].textContent,
};
    data.push(item);
}
}

    data.forEach(item =>{
    var newRow = `
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Produit ${j}</label>
                        <div class="input-group has-validation">
                                <span class="input-group-text" id="remove_product">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </span>
                            <input type="text" class="form-control"   value="${item.libelle}">
                            <input type="hidden" class="form-control" id="product_export"  value="${item.id}">
                        </div>
                    </div>`;
    $(wrapper_product).append(newRow);
    k++;
});

    input_checkboxes.forEach(item =>{
    if(item.checked)
    item.checked = false;
});
    $('.bd-product-modal-export').modal('hide');
});

    $(wrapper_product).on("click","#remove_product", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').parent('div').remove();
});

    // End Product Export
    // var e;
    c1 = $('#style-1').DataTable({
    "oLanguage": {
    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><polyline points="12 5 19 12 12 19"></polyline></svg>' },
    "sInfo": "Affiche de _PAGE_ à _PAGES_ sur _TOTAL_",
    "sSearch": '',
    "sSearchPlaceholder": "Rechercher...",
    "sLengthMenu": " _MENU_",
},
    "autoWidth": true,
    "lengthMenu": [5, 10],
    "pageLength": 5
});
    multiCheck(c1);

    // var e;
    c2 = $('#style-2').DataTable({
    "oLanguage": {
    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><polyline points="12 5 19 12 12 19"></polyline></svg>' },
    "sInfo": "Affiche de _PAGE_ à _PAGES_ sur _TOTAL_",
    "sSearch": '',
    "sSearchPlaceholder": "Rechercher...",
    "sLengthMenu": " _MENU_",
},
    "autoWidth": true,
    "lengthMenu": [5, 10],
    "pageLength": 5
});
    multiCheck(c2);
