jQuery(document).ready(function() {
    console.log("here");
    jQuery("[id^=__c3chart_]").each(function(i, div) {
        var c3data = jQuery(div).attr('c3data');
        c3.generate(jsyaml.load(decodeURIComponent(escape(atob(c3data)))));
    });
});
