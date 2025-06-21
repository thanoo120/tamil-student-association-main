let dataTableObj = null;
var form = null;

// $(document).ready(function () {
//     $("#page-loader").fadeOut();
// });

$(window).on('load', function () {
    $('#page-loader').fadeOut();
});


// $(document).ready(function () {
//     $("#page-loader").fadeOut();

//     let thisUrl = window.location.href.split("?")[0];
//     thisUrl = thisUrl.split("#")[0];
//     thisUrl = thisUrl.trim();

//     if(thisUrl.slice(-1) == "/")
//         thisUrl = thisUrl.substring(0, thisUrl.length-1);

//     $(".header-icon, .mobile-footer a, .sidebar-default a").removeClass("active");
//     $(".header-icon[href='"+ thisUrl +"'], .mobile-footer a[href='"+ thisUrl +"'], .sidebar-default a[href='"+ thisUrl +"']").addClass("active");

//     setTimeout(() => {
//         $(".alert:not(.dont-hide").slideUp();
//     }, 12000);

//     $("#btn-filter").on("click", function () {
//         $('#filter-panel').slideToggle();
//     });

//     $("#btn-import").on("click", function () {
//         $('#import-panel').slideToggle();
//     });

//     $(".mobile-filter-btn").on("click", function(){
//         $('.mobile-filter-overlay').fadeIn();
//         $('.mobile-filter').slideDown();
//         $("body").css("maxHeight", "100vh").addClass("overflow-hidden");
//     });

//     $(".mobile-filter .close-btn").on("click", function(){
//         $('.mobile-filter-overlay').toggle();
//         $('.mobile-filter').slideToggle();
//         $("body").css("maxHeight", "unset").removeClass("overflow-hidden");
//     });

//     $("body").on('click', '.toggle-password', function() {
//         $(this).toggleClass("fa-eye fa-eye-slash");
//         var input = $("#password");
//         if (input.attr("type") === "password") {
//             input.attr("type", "text");
//         } else {
//             input.attr("type", "password");
//         }
//     });

//     $.each($('#data-table thead tr th'), function(i, th){
//         if($(th).text() != "" && $(th).text() != "Actions")
//             $('#data-table tbody tr td:nth-child('+ (i+1) +')').attr("label", $(th).text() + ": ");
//     });

//     console.log($(".lazy-load"));
//     $.each($(".lazy-load"), function(ii, img){
//         $(img).on("load", function () {
//             $(img).parent().find(".placeholder-img").addClass("d-none");
//             $(img).removeClass("d-none");
//         }).each(function(){
//             if(this.complete) {
//               $(this).trigger('load');
//             }
//         });

//         $(img).on("error", function () {
//             console.error("Cannot load image");
//         });
//     });

//     $(".confirm-action").on("submit", function (e) {
//         form = this;
//         console.log(form);
//         e.preventDefault();
//         swal({
//             title: "Confirmation",
//             text: "Are you sure that you want to proceed?",
//             type: "warning",
//             showCancelButton: true,
//             confirmButtonColor: "#E77300",
//             buttons: [
//                 'No',
//                 'Yes'
//             ],
//             dangerMode: true,
//         }).then(function (result) {
//             console.log("actions");
//             if (result.value) {
//                 console.log("ok");
//                 form.submit();
//             } else {
//                 console.log("no");
//                 return;
//             }
//         });
//     });

//     $(".confirm-action-link").on("click", function (ev) {
//         ev.preventDefault();
//         var urlToRedirect = ev.currentTarget.getAttribute('href');
//         console.log(urlToRedirect);
//         swal({
//             title: "Confirmation",
//             text: "Are you sure that you want to proceed?",
//             type: "warning",
//             showCancelButton: true,
//             confirmButtonColor: "#E77300",
//             buttons: [
//                 'No',
//                 'Yes'
//             ],
//             dangerMode: true,
//         }).then(function (result) {
//             if (result.value) {
//                 window.location.assign(urlToRedirect);
//             } else {
//                 //
//             }
//         });
//     });

//     $("form:not(.confirm-action)").on("submit", function(e){
//         $("#page-loader").show();

//         setTimeout(() => {
//             $("#page-loader").hide();
//         }, 10000);

//         return true;
//     });  
    
//     $("a:not([target='_blank'], [href=''], [href='#'], [href*='mailto'], [href*='tel'], .confirm-action-link)").on("click", function(e){
//         $("#page-loader").show();

//         setTimeout(() => {
//             $("#page-loader").hide();
//         }, 3000);
        
//         return true;
//     });  

//     $("form").on("submit", function(e){
//         let formFields = $(this).find("input,select,textarea");

//         $.each(formFields, function(fi, f){
//             if(!validateField(f))
//                 e.preventDefault();
//         });

//         return true;
//     });  

//     function validateField(f)
//     {
//         let isValid = true;
//         let msg = "";

//         let value = ($(f).val() + "").trim();

//         if($(f).is("[required]"))
//         {
//             if($(f).is(':checkbox'))
//             {
//                 if(!$(f).prop("checked"))
//                 {
//                     isValid = false;
//                     msg = "You need to check this";
//                 }
//             }       
//             else if(value == "")
//             {
//                 isValid = false;
//                 msg = "Required";
//             }
//         }

//         if(value != "" && isValid && !$(f).hasClass("igore-sp-validations"))
//         {
//             if($(f).attr("type") == "password" && value.length < 6)
//             {
//                 isValid = false;
//                 msg = "Should be atleast 6 characters";
//             } 
//             else if($(f).attr("type") == "email" && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,20})+$/.test(value)))
//             {
//                 isValid = false;
//                 msg = "Invalid email address";
//             }  
//             else if($(f).attr("type") == "number")
//             {
//                 let thisVal = parseFloat(value + "");
//                 let thisMin = parseFloat($(f).attr("min") + "");
//                 let thisMax = parseFloat($(f).attr("max") + "");

//                 if(isNaN(thisVal))
//                 {
//                     isValid = false;
//                     msg = "Should be a number";
//                 }
//                 else if(!isNaN(thisMin) && thisMin > thisVal)
//                 {
//                     isValid = false;
//                     msg = "Should be greater than " + thisMin;
//                 }
//                 else if(!isNaN(thisMax) && thisMax < thisVal)
//                 {
//                     isValid = false;
//                     msg = "Should be lesser than " + thisMax;
//                 }
//             }
//             else if($(f).attr("type") == "file")
//             {
//                 let fileSize = f.files[0].size/(1024*1024);
//                 if(fileSize > 10)
//                 {
//                     isValid = false;
//                     msg = "The file should be less than 10 MB";
//                 }
//             }
//             else if($(f).hasClass("telephone") && value != "" && !(/^(?:7|0|(?:\+94))[0-9]{7,15}$/.test(value)))
//             {
//                 isValid = false;
//                 msg = "Invalid telephone number";
//             }
//         }

//         $(f).parent().find(".validation-errors").remove();
//         $(f).removeClass("error-input");

//         if(!isValid)
//         {
//             setTimeout(() => {
//                 $(f).addClass("error-input");
//                 $(f).parent().append("<label class='validation-errors text-danger fw-normal font-100 font-italic ms-2 d-block'><i class='fas fa-times me-1 mt-1'></i>"+ msg +"</label>");
//                 //console.log($(f).parent().html());
//                 $("#page-loader").hide();
//                 return false;                
//             }, 1);
//         }
//         else 
//             return true;
//     }
// });
