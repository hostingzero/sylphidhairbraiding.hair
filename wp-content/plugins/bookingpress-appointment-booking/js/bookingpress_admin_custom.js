jQuery(document).on("click",".notice-warning.bpa_customize_error_notice .notice-dismiss",function(i){var n=jQuery(this).parent().data("bookingpress_confirm");if(!confirm(n))return i.preventDefault(),!1;jQuery.ajax({type:"POST",url:appoint_ajax_obj.ajax_url,data:{action:"bookingpress_dismisss_admin_notice"}})});