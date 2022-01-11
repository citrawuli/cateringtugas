<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Aisya Catering'),


    'public' => [
        'favicon' => 'teamo/images/aisyacatering_kontak_logo.png',
        'fonts' => [
            'google' => [
                'families' => [
                    'Poppins:300,400,500,600,700'
                ]
            ]
        ],
		'global' => [
			'css' => [
				'davur/css/style.css',
			],
			'js' => [
				'davur/vendor/global/global.min.js',
			],
		],
		'pagelevel' => [
			'css' => [
				'dashboard_1' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							// 'davur/vendor/jqvmap/css/jqvmap.min.css',
							// 'davur/vendor/chartist/css/chartist.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'indexAdPem' => [
					'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'davur/vendor/jqvmap/css/jqvmap.min.css',
					'davur/vendor/chartist/css/chartist.min.css',
					'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'indexAdPembayaran' => [
					'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'davur/vendor/jqvmap/css/jqvmap.min.css',
					'davur/vendor/chartist/css/chartist.min.css',
					'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'indexAdBlog' => [
					'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'davur/vendor/jqvmap/css/jqvmap.min.css',
					'davur/vendor/chartist/css/chartist.min.css',
					'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'analytics' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jqvmap/css/jqvmap.min.css',
							'davur/vendor/chartist/css/chartist.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'order' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jqvmap/css/jqvmap.min.css',
							'davur/vendor/chartist/css/chartist.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'order_list' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'review' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jqvmap/css/jqvmap.min.css',
							'davur/vendor/chartist/css/chartist.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
							'davur/vendor/owl-carousel/owl.carousel.css',
				],
				 'general_customers' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'app_calender' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/fullcalendar/css/fullcalendar.min.css',
							'davur/css/icomoon.css',
				],
				'app_profile' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'chart_chartist' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
              				'davur/vendor/chartist/css/chartist.min.css',
				],
				'chart_chartjs' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'chart_flot' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'chart_morris' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'chart_peity' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'chart_sparkline' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_checkout' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_customers' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_invoice' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_product_detail' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_product_grid' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_product_list' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ecom_product_order' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'email_compose' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/dropzone/dist/dropzone.css',
				],
				'email_inbox' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'email_read' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'form_editor_summernote' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/summernote/summernote.css',
				],
				'form_element' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'form_pickers' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/bootstrap-daterangepicker/daterangepicker.css',
							'davur/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
							'davur/vendor/jquery-asColorPicker/css/asColorPicker.min.css',
							'davur/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
							'davur/vendor/pickadate/themes/default.css',
							'davur/vendor/pickadate/themes/default.date.css',
				],
				'form_validation_jquery' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'form_wizard' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jquery-steps/css/jquery.steps.css',
				],
				'map_jqvmap' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jqvmap/css/jqvmap.min.css',
				],
				'table_bootstrap_basic' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'table_datatable_basic' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
				],
				'uc_nestable' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/nestable2/css/jquery.nestable.min.css',
				],
				'uc_noui_slider' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/nouislider/nouislider.min.css',
				],
				'uc_select2' => [
							'davur/vendor/select2/css/select2.min.css',
				],
				'uc_sweetalert' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'uc_toastr' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/toastr/css/toastr.min.css',
				],
				'ui_accordion' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_alert' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_badge' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_button' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_button_group' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_card' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_carousel' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_dropdown' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_grid' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_list_group' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_media_object' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_modal' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_pagination' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_popover' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_progressbar' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_tab' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'ui_typography' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'widget_basic' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/chartist/css/chartist.min.css',
				],
				'viewusertable' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
				],
				'viewuserforminput' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'viewformaddroleuser' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/select2/css/select2.min.css',
				],
				'edituser' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/select2/css/select2.min.css',
				],
				'viewcategorytable' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
				],
				'viewcategoryforminput' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'editcategory' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'viewproducttable' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
							'davur/vendor/dropzone/dist/dropzone.css',
							'davur/vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'viewcobadropzone' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/dropzone/dist/dropzone.css',
				],
				'dropzoneView' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/dropzone/dist/dropzone.css',
							'davur/vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'viewproductforminput' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/select2/css/select2.min.css',
				],
				'editproduct' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/select2/css/select2.min.css',
				],
				'trashedproduct' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
				],
				'trasheduser' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
				],
				'trashedcategory' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
				],
				'trashedPaymentID' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'trashedBlog' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'viewpemesanantable' => [
              				'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
							'davur/vendor/datatables/css/button.dataTables.min.css',
				],
				'viewformpemesanan' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jquery-steps/css/jquery.steps.css',
							
							'davur/vendor/select2/css/select2.min.css',

							'davur/vendor/bootstrap-daterangepicker/daterangepicker.css',
							'davur/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
							
							'davur/vendor/pickadate/themes/default.css',
							'davur/vendor/pickadate/themes/default.date.css',
				],
				'kontak' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/chartist/css/chartist.min.css',
							'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'blogTable' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'blogTableASC' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'blogForm' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/summernote/new/summernote.css',
	  			],
				'editBlog' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/summernote/new/summernote.css',
							'davur/vendor/select2/css/select2.min.css',
	  			],
				'trashedOrder' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'EditOrder' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/jquery-steps/css/jquery.steps.css',
							
							'davur/vendor/select2/css/select2.min.css',

							'davur/vendor/bootstrap-daterangepicker/daterangepicker.css',
							'davur/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
									
							'davur/vendor/pickadate/themes/default.css',
							'davur/vendor/pickadate/themes/default.date.css',
				],
				'Invoice' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'rekapOrderanBesok' => [
						'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
						'davur/vendor/datatables/css/jquery.dataTables.min.css',
		  		],
				'OrderCalendar' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/fullcalendar/css/fullcalendarV3.min.css',
							'davur/css/icomoon.css',
	  			],
				'paymentIDtable' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],  
				'addpaymentIDtable' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				'orderDiterimaTable' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],  
				'viewdetailorder' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],    
				'tablePembayaranAll' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			], 
				'addpaymentinAll' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/select2/css/select2.min.css',
				],
				'trashedPaymentinAll' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/datatables/css/jquery.dataTables.min.css',
	  			],
				'edituprof' => [
							'davur/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'davur/vendor/select2/css/select2.min.css',
				],
				   
			],
			'js' => [
				'dashboard_1' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							// 'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/waypoints/jquery.waypoints.min.js',
							'davur/vendor/jquery.counterup/jquery.counterup.min.js',
							// 'davur/vendor/apexchart/apexchart.js',
							// 'davur/vendor/peity/jquery.peity.min.js',
							'davur/js/dashboard/dashboard-1.js',
              				'davur/js/custom.min.js',
              				'davur/js/deznav-init.js',
				],
				'indexAdPem' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/waypoints/jquery.waypoints.min.js',
							'davur/vendor/jquery.counterup/jquery.counterup.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/peity/jquery.peity.min.js',
							'davur/js/dashboard/dashboard-1.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
				],
				'indexAdPembayaran' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/waypoints/jquery.waypoints.min.js',
							'davur/vendor/jquery.counterup/jquery.counterup.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/peity/jquery.peity.min.js',
							'davur/js/dashboard/dashboard-1.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
				],
				'indexAdBlog' => [
					'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'davur/vendor/chart.js/Chart.bundle.min.js',
					'davur/vendor/waypoints/jquery.waypoints.min.js',
					'davur/vendor/jquery.counterup/jquery.counterup.min.js',
					'davur/vendor/apexchart/apexchart.js',
					'davur/vendor/peity/jquery.peity.min.js',
					'davur/js/dashboard/dashboard-1.js',
					'davur/js/custom.min.js',
					'davur/js/deznav-init.js',
				],
				'analytics' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/waypoints/jquery.waypoints.min.js',
							'davur/vendor/jquery.counterup/jquery.counterup.min.js',
							'davur/vendor/peity/jquery.peity.min.js',
							'davur/js/dashboard/analytics.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				 'order' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/waypoints/jquery.waypoints.min.js',
							'davur/vendor/jquery.counterup/jquery.counterup.min.js',
							'davur/vendor/peity/jquery.peity.min.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				 'order_list' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/datatables/js/jquery.dataTables.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'review' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/owl-carousel/owl.carousel.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'general_customers' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/datatables/js/jquery.dataTables.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'app_calender' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/jqueryui/js/jquery-ui.min.js',
							'davur/vendor/moment/moment.min.js',
							'davur/vendor/fullcalendar/js/fullcalendar.min.js',
							'davur/js/plugins-init/fullcalendar-init.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'app_profile' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'chart_chartist' => [
                			'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/chartist/js/chartist.min.js',
							'davur/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
							'davur/js/plugins-init/chartist-init.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'chart_chartjs' => [
                			'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/js/plugins-init/chartjs-init.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'chart_flot' => [
                			'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/flot/jquery.flot.js',
							'davur/vendor/flot/jquery.flot.pie.js',
							'davur/vendor/flot/jquery.flot.resize.js',
							'davur/vendor/flot-spline/jquery.flot.spline.min.js',
							'davur/js/plugins-init/flot-init.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'chart_morris' => [
                			'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/raphael/raphael.min.js',
							'davur/vendor/morris/morris.min.js',
							'davur/js/plugins-init/morris-init.js',
				],
				'chart_peity' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/peity/jquery.peity.min.js',
							'davur/js/plugins-init/piety-init.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',

				],
				'chart_sparkline' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/jquery-sparkline/jquery.sparkline.min.js',
							'davur/js/plugins-init/sparkline-init.js',
							'davur/vendor/svganimation/vivus.min.js',
							'davur/vendor/svganimation/svg.animation.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'ecom_checkout' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'ecom_customers' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'ecom_invoice' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'ecom_product_detail' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
			 	'ecom_product_grid' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'ecom_product_list' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'ecom_product_order' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/highlightjs/highlight.pack.min.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'email_compose' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/dropzone/dist/dropzone.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'email_inbox' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'email_read' => [
			                'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			                'davur/vendor/chart.js/Chart.bundle.min.js',
			                'davur/vendor/apexchart/apexchart.js',
			                'davur/js/custom.min.js',
			                'davur/js/deznav-init.js',
				],
				'form_editor_summernote' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			             	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/summernote/js/summernote.min.js',
							'davur/js/plugins-init/summernote-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'form_element' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'form_pickers' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/moment/moment.min.js',
							'davur/vendor/bootstrap-daterangepicker/daterangepicker.js',
							'davur/vendor/clockpicker/js/bootstrap-clockpicker.min.js',
							'davur/vendor/jquery-asColor/jquery-asColor.min.js',
							'davur/vendor/jquery-asGradient/jquery-asGradient.min.js',
							'davur/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
							'davur/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
							'davur/vendor/pickadate/picker.js',
							'davur/vendor/pickadate/picker.time.js',
							'davur/vendor/pickadate/picker.date.js',
							'davur/js/plugins-init/bs-daterange-picker-init.js',
							'davur/js/plugins-init/clock-picker-init.js',
							'davur/js/plugins-init/jquery-asColorPicker.init.js',
							'davur/js/plugins-init/material-date-picker-init.js',
							'davur/js/plugins-init/pickadate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'form_validation_jquery' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'form_wizard' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/jquery-steps/build/jquery.steps.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/plugins-init/jquery-steps-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'map_jqvmap' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/jqvmap/js/jquery.vmap.min.js',
							'davur/vendor/jqvmap/js/jquery.vmap.world.js',
							'davur/vendor/jqvmap/js/jquery.vmap.usa.js',
							'davur/js/plugins-init/jqvmap-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'page_error_400' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'page_error_403' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'page_error_404' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'page_error_500' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'page_error_503' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'page_forgot_password' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'page_lock_screen' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/deznav/deznav.min.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'page_login' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
			           		'davur/js/custom.min.js',
			           		'davur/js/deznav-init.js',
				],
				'page_register' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'table_bootstrap_basic' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'table_datatable_basic' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'uc_nestable' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/vendor/nestable2/js/jquery.nestable.min.js',
				            'davur/js/plugins-init/nestable-init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'uc_noui_slider' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/vendor/nouislider/nouislider.min.js',
				            'davur/vendor/wnumb/wNumb.js',
				            'davur/js/plugins-init/nouislider-init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'uc_select2' => [
				            'davur/vendor/select2/js/select2.full.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/plugins-init/select2-init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'uc_sweetalert' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/vendor/sweetalert2/dist/sweetalert2.min.js',
				            'davur/js/plugins-init/sweetalert.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'uc_toastr' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/vendor/toastr/js/toastr.min.js',
				            'davur/js/plugins-init/toastr-init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_accordion' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'ui_alert' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_badge' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_button' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_button_group' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_card' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_carousel' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_dropdown' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_grid' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_list_group' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_media_object' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_modal' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_pagination' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_popover' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_progressbar' => [
			            	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
			              	'davur/vendor/chart.js/Chart.bundle.min.js',
			              	'davur/vendor/apexchart/apexchart.js',
			            	'davur/js/custom.min.js',
			            	'davur/js/deznav-init.js',
				],
				'ui_tab' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'ui_typography' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'widget_basic' => [
				            'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/apexchart/apexchart.js',
				            'davur/vendor/chartist/js/chartist.min.js',
				            'davur/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
				            'davur/vendor/flot/jquery.flot.js',
				            'davur/vendor/flot/jquery.flot.pie.js',
				            'davur/vendor/flot/jquery.flot.resize.js',
				            'davur/vendor/flot-spline/jquery.flot.spline.min.js',
				            'davur/vendor/jquery-sparkline/jquery.sparkline.min.js',
				            'davur/js/plugins-init/sparkline-init.js',
				            'davur/vendor/peity/jquery.peity.min.js',
				            'davur/js/plugins-init/piety-init.js',
				            'davur/vendor/chart.js/Chart.bundle.min.js',
				            'davur/js/plugins-init/widgets-script-init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'viewusertable' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'viewuserforminput' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'viewformaddroleuser' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
			              	'davur/vendor/select2/js/select2.full.min.js',
				],
				'edituser' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
			              	'davur/vendor/select2/js/select2.full.min.js',
				],
				'viewcategorytable' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'viewcategoryforminput' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'editcategory' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
				],
				'viewproducttable' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				            'davur/vendor/dropzone/dist/dropzone.js',
							'davur/vendor/sweetalert2/dist/sweetalert2.min.js',
				            'davur/js/plugins-init/sweetalert.init.js',
				],
				'viewcobadropzone' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				            'davur/vendor/dropzone/dist/dropzone.js',
				],

				'dropzoneView'=> [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				            'davur/vendor/dropzone/dist/dropzone.js',
				            'davur/vendor/sweetalert2/dist/sweetalert2.min.js',
				            'davur/js/plugins-init/sweetalert.init.js',
				],
				
				'viewproductforminput' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
			              	'davur/vendor/maskk/js/jquery.mask.js',
							'davur/vendor/select2/js/select2.full.min.js',
				], 
				'editproduct' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
			              	'davur/vendor/maskk/js/jquery.mask.js',
							'davur/vendor/select2/js/select2.full.min.js',
				],
				'trashedproduct' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'trasheduser' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'trashedcategory' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            'davur/vendor/datatables/js/jquery.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',
				            'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'viewpemesanantable' => [
              				'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				            
							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/vendor/datatables/js/button.dataTables.min.js',
				            'davur/js/plugins-init/datatables.init.js',

							'davur/js/custom.min.js',
				            'davur/js/deznav-init.js',
				],
				'viewformpemesanan' => [
			              	'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-steps/build/jquery.steps.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/plugins-init/jquery-steps-init.js',
			              	'davur/js/custom.min.js',
			              	'davur/js/deznav-init.js',
			              	
			              	'davur/vendor/select2/js/select2.full.min.js',
							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
							
							'davur/vendor/maskk/js/jquery.mask.js',
							'davur/vendor/jqueryui/js/jquery-ui.min.js',

							'davur/vendor/moment/moment.min.js',
							'davur/vendor/bootstrap-daterangepicker/daterangepicker.js',
							'davur/vendor/clockpicker/js/bootstrap-clockpicker.min.js',
							'davur/vendor/pickadate/picker.js',
							'davur/vendor/pickadate/picker.time.js',
							'davur/vendor/pickadate/picker.date.js',
							'davur/js/plugins-init/bs-daterange-picker-init.js',
							'davur/js/plugins-init/clock-picker-init.js',
							'davur/js/plugins-init/pickadate-init.js',
				], 
				'kontak' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jqvmap/js/jquery.vmap.min.js',
							'davur/js/plugins-init/jqvmap-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			],
				'blogTable' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			],
				'blogTableASC' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			],
				'blogForm' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/vendor/summernote/new/summernote.js',
							// 'davur/js/plugins-init/summernote-init.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			], 
				'editBlog' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/vendor/summernote/new/summernote.js',
							// 'davur/js/plugins-init/summernote-init.js',
							'davur/vendor/select2/js/select2.full.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			], 
				'trashedBlog' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],
				'trashedOrder' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],
				'EditOrder' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-steps/build/jquery.steps.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/plugins-init/jquery-steps-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
							
							'davur/vendor/select2/js/select2.full.min.js',
							// 'davur/js/plugins-init/datatables.init.js',
							
							'davur/vendor/maskk/js/jquery.mask.js',
							'davur/vendor/jqueryui/js/jquery-ui.min.js',

							'davur/vendor/moment/moment.min.js',
							'davur/vendor/bootstrap-daterangepicker/daterangepicker.js',
							'davur/vendor/clockpicker/js/bootstrap-clockpicker.min.js',
							'davur/vendor/pickadate/picker.js',
							'davur/vendor/pickadate/picker.time.js',
							'davur/vendor/pickadate/picker.date.js',
							'davur/js/plugins-init/bs-daterange-picker-init.js',
							'davur/js/plugins-init/clock-picker-init.js',
							'davur/js/plugins-init/pickadate-init.js',
				], 
				'Invoice' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],
				'rekapOrderanBesok' => [
					'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				
					'davur/js/custom.min.js',
					'davur/js/deznav-init.js',

					'davur/vendor/datatables/js/jquery.dataTables.min.js',
					'davur/js/plugins-init/datatables.init.js',
		  		],
				  
				'OrderCalendar' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/chart.js/Chart.bundle.min.js',
							'davur/vendor/apexchart/apexchart.js',
							'davur/vendor/jqueryui/js/jquery-ui.min.js',
							'davur/vendor/moment/moment.min.js',
							'davur/vendor/fullcalendar/js/fullcalendar.min.js',
							// 'davur/js/plugins-init/fullcalendar-initnew.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
				],
				'paymentIDtable' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],
				'addpaymentIDtable' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
							'davur/vendor/maskk/js/jquery.mask.js',
	  			], 
				  
				'trashedPaymentID' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			], 
				'orderDiterimaTable' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],
				'viewdetailorder' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],  
				'tablePembayaranAll' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
						
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',

							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
	  			],    
				'addpaymentinAll' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
							'davur/vendor/maskk/js/jquery.mask.js',
							'davur/vendor/select2/js/select2.full.min.js',
							'davur/js/plugins-init/select2-init.js',
	  			],
				'trashedPaymentinAll' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/datatables/js/jquery.dataTables.min.js',
							'davur/js/plugins-init/datatables.init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
	  			], 
				'edituprof' => [
							'davur/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'davur/vendor/jquery-validation/jquery.validate.min.js',
							'davur/js/plugins-init/jquery.validate-init.js',
							'davur/js/custom.min.js',
							'davur/js/deznav-init.js',
							'davur/vendor/select2/js/select2.full.min.js',
				],
			]
		],
	]
];
