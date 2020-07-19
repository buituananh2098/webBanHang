// jQuery(document).ready(function () {

//     // Time Picker
//     jQuery('#timepicker').timepicker({
//         defaultTIme: false,
//         icons: {
//             up: 'mdi mdi-chevron-up',
//             down: 'mdi mdi-chevron-down'
//         }
//     });
//     jQuery('#timepicker2').timepicker({
//         showMeridian: false,
//         icons: {
//             up: 'mdi mdi-chevron-up',
//             down: 'mdi mdi-chevron-down'
//         }
//     });
//     jQuery('#timepicker3').timepicker({
//         minuteStep: 15,
//         icons: {
//             up: 'mdi mdi-chevron-up',
//             down: 'mdi mdi-chevron-down'
//         }
//     });

//     //colorpicker start

//     $('.colorpicker-default').colorpicker({
//         format: 'hex'
//     });
//     $('.colorpicker-rgba').colorpicker();


//     // Date Picker
//     // jQuery('#datepicker').datepicker();
//     jQuery('.datepicker').datepicker({
//         format: "dd/mm/yyyy"
//     });
//     $('.date-own').datepicker({
//         format: "yyyy",
//         viewMode: "years",
//         minViewMode: "years",
//         changeYear: true,
//     });
//     jQuery('#datepicker-autoclose').datepicker({
//         autoclose: true,
//         todayHighlight: true
//     });
//     jQuery('#datepicker-inline').datepicker();
//     jQuery('#datepicker-multiple-date').datepicker({
//         format: "mm/dd/yyyy",
//         clearBtn: true,
//         multidate: true,
//         multidateSeparator: ","
//     });
//     jQuery('#date-range').datepicker({
//         toggleActive: true
//     });


//     //Clock Picker
//     $('.clockpicker').clockpicker({
//         donetext: 'Done'
//     });

//     $('#single-input').clockpicker({
//         placement: 'bottom',
//         align: 'left',
//         autoclose: true,
//         'default': 'now'
//     });
//     $('#check-minutes').click(function (e) {
//         // Have to stop propagation here
//         e.stopPropagation();
//         $("#single-input").clockpicker('show')
//             .clockpicker('toggleView', 'minutes');
//     });


//     //Date range picker
//     $('.input-daterange-datepicker').daterangepicker({
//         buttonClasses: ['btn', 'btn-sm'],
//         applyClass: 'btn-success',
//         cancelClass: 'btn-light'
//     });
//     $('.input-daterange-timepicker').daterangepicker({
//         timePicker: true,
//         timePickerIncrement: 30,
//         locale: {
//             format: 'MM/DD/YYYY h:mm A'
//         },
//         buttonClasses: ['btn', 'btn-sm'],
//         applyClass: 'btn-success',
//         cancelClass: 'btn-light'
//     });
//     $('.input-limit-datepicker').daterangepicker({
//         format: 'MM/DD/YYYY',
//         minDate: '06/01/2018',
//         maxDate: '06/30/2018',
//         buttonClasses: ['btn', 'btn-sm'],
//         applyClass: 'btn-success',
//         cancelClass: 'btn-light',
//         dateLimit: {
//             days: 6
//         }
//     });

//     $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

//     $('#reportrange').daterangepicker({
//         format: 'MM/DD/YYYY',
//         startDate: moment().subtract(29, 'days'),
//         endDate: moment(),
//         minDate: '01/01/2017',
//         maxDate: '12/31/2020',
//         dateLimit: {
//             days: 60
//         },
//         showDropdowns: true,
//         showWeekNumbers: false,
//         timePicker: false,
//         timePickerIncrement: 1,
//         timePicker12Hour: true,
//         ranges: {
//             'Today': [moment(), moment()],
//             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
//             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//             'This Month': [moment().startOf('month'), moment().endOf('month')],
//             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
//         },
//         opens: 'left',
//         drops: 'down',
//         buttonClasses: ['btn', 'btn-sm'],
//         applyClass: 'btn-success',
//         cancelClass: 'btn-light',
//         separator: ' to ',
//         locale: {
//             applyLabel: 'Submit',
//             cancelLabel: 'Cancel',
//             fromLabel: 'From',
//             toLabel: 'To',
//             customRangeLabel: 'Custom',
//             daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
//             monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
//             firstDay: 1
//         }
//     }, function (start, end, label) {
//         console.log(start.toISOString(), end.toISOString(), label);
//         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
//     });

// });



// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('.img_change').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
// $(".inp__img").change(function() {
//     readURL(this);
// });
// jQuery.fn.center = function () {
//     this.css("position","relative");
//     this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
//     this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px");
//     return this;
// }
// $("#form-actions").css("width", $('#main-content').width() + 25).css('margin','0 auto');
// $("#form-footer").css("width", $('.page-wrapper').width() + 25);

function notification( type, message ) {
    $.toast({
        text: message,
        position: 'buttom-right',
        loaderBg:'#ff6849',
        icon: type,
        stack: 6,
        hideAfter: 5000
    });
}

$(document).on('click', '.btn-delete', function() {
    var result = confirm("Bạn có muốn xóa ?");
    if (result) {
        location.href = $(this).attr('data-href');
    }
});

/**
 * hiển thị ảnh nhỏ khi tải ảnh lên từ máy tính
 * @param  {[type]} input [description]
 */
function image_change(input) {
    var x = input.getAttribute("id");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('img[data-id="'+x+'"]').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
