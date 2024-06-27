$(document).ready(function() {

//------------- Extend table tools -------------//
    $.extend(true, $.fn.DataTable.TableTools.classes, {
        "container": "DTTT btn-group",
        "buttons": {
            "normal": "btn btn-default",
            "disabled": "disabled"
        },
        "collection": {
            "container": "DTTT_dropdown dropdown-menu",
            "buttons": {
                "normal": "",
                "disabled": "disabled"
            }
        },
        "print": {
            "info": "DTTT_print_info modal"
        }
    });

// Have the collection use a bootstrap compatible dropdown
    $.extend(true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
        "collection": {
            "container": "ul",
            "button": "li",
            "liner": "a"
        }
    });

//------------- Datatables -------------//
    $('#responsive-datatables').dataTable({
        "sPaginationType": "bs_full", //"bs_normal", "bs_two_button", "bs_four_button", "bs_full"
        "fnPreDrawCallback": function (oSettings) {
            $('.dataTables_filter input').addClass('form-control input-large').attr('placeholder', $search);
            $('.dataTables_length select').addClass('form-control input-small');
        },
        "oLanguage": {
            "sSearch": "",
            "sLengthMenu": "<span>_MENU_ </span>"
        },
        "bJQueryUI": false,
        "bAutoWidth": false,
    });

    $('#notifications_table').dataTable({
        "sPaginationType": "bs_full", //"bs_normal", "bs_two_button", "bs_four_button", "bs_full"
        "fnPreDrawCallback": function (oSettings) {
            $('.dataTables_filter input').addClass('form-control input-large').attr('placeholder', 'search');
            $('.dataTables_length select').addClass('form-control input-small');
        },
        "oLanguage": {
            "sSearch": "",
            "sLengthMenu": "<span>_MENU_ </span>"
        },
        "bJQueryUI": false,
        "bAutoWidth": false,
        "sDom": "<'row'<'col-lg-3 col-md-3'l><'col-lg-6 col-md-6 text-center'T><'col-lg-3 col-md-3'f>r>t<'row-'<'col-lg-6 col-md-6'i><'col-lg col-md-6'p>>",
        "oTableTools": {
            "sSwfPath": "/assets/js/swf/copy_csv_xls_pdf.swf",
            "aButtons": [
                {
                    "sExtends": "print",
                    "sButtonText": '<i class="st-printer s16 vat"></i> Print',
                    "aButtons": ["print"]
                },
                {
                    "sExtends": "xls",
                    "sButtonText": '<i class="im-file-excel s16 vat"></i> XLS',
                    "aButtons": ["xls"]
                },
                {
                    "sExtends": "pdf",
                    "sButtonText": '<i class="im-file-pdf s16 vat"></i> PDF',
                    "aButtons": ["pdf"]
                },
                {
                    "sExtends": "csv",
                    "sButtonText": '<i class="im-file-xml s16 vat"></i> CSV',
                    "aButtons": ["csv"]
                },
                {
                    "sExtends": "copy",
                    "sButtonText": '<i class="im-copy s16 vat"></i> Copy',
                    "aButtons": ["copy"]
                }
            ]
        }
    });

});