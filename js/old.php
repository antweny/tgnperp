/*Sidebar*/
// (function($) {
//     "use strict";
//
//     // Add active state to sidbar nav links
//     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
//     $(".sidebar .sidenav-menu a.nav-link").each(function() {
//         if (this.href === path) {
//             $(this).addClass("active");
//         }
//     });
//     $(".sidebar .sidenav-menu a.open").each(function() {
//         if (this.href === path) {
//             $(this).addClass("active");
//         }
//     });
//
//     // Toggle the side navigation
//     $("#sidebarToggle").on("click", function(e) {
//         e.preventDefault();
//         $("body").toggleClass("sidenav-toggled");
//     });
// })(jQuery);
$(document).ready(function () {
$("#sidebar").mCustomScrollbar({
theme: "minimal"
});

$('#sidebarCollapse').on('click', function () {
$('#sidebar, #content').toggleClass('active');
$('.collapse.in').toggleClass('in');
$('a[aria-expanded=true]').attr('aria-expanded', 'false');
});
});

//DataTables
$(document).ready( function () {
$('#table').DataTable({
lengthMenu: [[75, 100, 125, 150,-1],[75, 100, 125, 150,"All"]]
});
});

/* Initialize Tool tip */
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})

/* Single Select */
$(document).ready(function() {
$('.single-select').select2();
});

//Editor
$(".editor").editor({
height: 400,
uiLibrary: 'bootstrap4',
iconsLibrary: 'fontawesome',

});


//Select Dropdown



/* Academics */
$("#educationLevel").select2({ tags: true,});
$('#program').select2({tags: true,});
$('#educationLevel').select2({ tags: true,});
$('#certificate').select2({ tags: true,});


/* Job */
$("#jobLevel").select2({tags: true, });
$("#jobType").select2({ tags: true,});
$("#jobTitle").select2({ tags: true,});
$("#titleGroup").select2({ tags: true,});
$("#positionMode").select2({ tags: true,});


/* Profession */
$("#field").select2({tags: true,});
$("#language").select2({tags: true,});
$("#skill").select2({tags: true,});


/* Office */
$("#office").select2({tags: true,});
$("#officeCategory").select2({ tags: true,});


/* Recognition */
$("#accreditation").select2({ tags: true,});
$("#attribute").select2({ tags: true, });


/* General */
$("#location").select2({tags: true,});




/* Access */
$("#user").select2({tags: true,});



/* Media */




/* System */

















function myFunction() {
var x = document.getElementById("profileLinks");
if (x.style.display === "block") {
x.style.display = "none";
} else {
x.style.display = "block";
}
}


