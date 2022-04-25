// Initialize Datatable
$(document).ready( function () {
    $('#table').DataTable({
        lengthMenu: [[50, 100, 150, 200,-1],[50, 100, 150, 200,"All"]]
    });
    $('.single-select').select2();

    $('#start_date').datepicker();

    $('#end_date').datepicker();
} );
