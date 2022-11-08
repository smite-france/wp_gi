
    jQuery(document).ready(function() {
        jQuery('#select_god_role option[value=""]').prop('selected', true);
        jQuery('#select_god_pantheon option[value=""]').prop('selected', true);
        jQuery('#select_god_role,#select_god_pantheon').on("change", function () {
            jQuery('figure').each(function () { //loop through each checkbox
                if (jQuery("#select_god_role").val() == "" && jQuery("#select_god_pantheon").val() == "") {
                    jQuery(this).show();
                } else {
                    if(jQuery("#select_god_role").val() == ""){
                        if (jQuery(this).attr("data-pantheon") == jQuery("#select_god_pantheon").val()) {
                            jQuery(this).show();
                        } else {
                            jQuery(this).hide();
                        }
                    }else {
                        if (jQuery("#select_god_pantheon").val() == "") {
                            if (jQuery(this).attr("data-role") == jQuery("#select_god_role").val()) {
                                jQuery(this).show();
                            } else {
                                jQuery(this).hide();
                            }
                        }
                        else {
                            if (jQuery(this).attr("data-pantheon") == jQuery("#select_god_pantheon").val() && jQuery(this).attr("data-role") == jQuery("#select_god_role").val()) {
                                jQuery(this).show();
                            } else {
                                jQuery(this).hide();
                            }
                        }
                    }
                }
            });
        });
    });