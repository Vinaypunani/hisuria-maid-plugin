jQuery(document).ready(function() {
    jQuery("#maidlogo-fr").click(function(a) {
        a.preventDefault();
        var b = jQuery(this);
        var c = wp.media({
            title: "Select Image",
            button: {
                text: "Set Image"
            },
            multiple: false
        }).on("select", function() {
            var a = c.state().get("selection").first().toJSON();
            jQuery(b).parent().children(".maid_logo_fr").val(a.url);
            jQuery(b).parent().find("#logofr").attr("src", a.url).show();
        }).open();
    });
    jQuery("#maidlogo-en").click(function(a) {
        a.preventDefault();
        var b = jQuery(this);
        var c = wp.media({
            title: "Select Image",
            button: {
                text: "Set Image"
            },
            multiple: false
        }).on("select", function() {
            var a = c.state().get("selection").first().toJSON();
            jQuery(b).parent().children(".maid_logo_en").val(a.url);
            jQuery(b).parent().children("#logoen").attr("src", a.url);
        }).open();
    });
    jQuery("#maidlogo-nl").click(function(a) {
        a.preventDefault();
        var b = jQuery(this);
        var c = wp.media({
            title: "Select Image",
            button: {
                text: "Set Image"
            },
            multiple: false
        }).on("select", function() {
            var a = c.state().get("selection").first().toJSON();
            jQuery(b).parent().children(".maid_logo_nl").val(a.url);
            jQuery(b).parent().children("#logonl").attr("src", a.url);
        }).open();
    });

    jQuery("#passportlogo-fr").click(function(a) {
        a.preventDefault();
        var b = jQuery(this);
        var c = wp.media({
            title: "Select Image",
            button: {
                text: "Set Image"
            },
            multiple: false
        }).on("select", function() {
            var a = c.state().get("selection").first().toJSON();
            jQuery(b).parent().children(".passport_logo_fr").val(a.url);
            jQuery(b).parent().find("#passportlogofr").attr("src", a.url).show();
        }).open();
    });
});