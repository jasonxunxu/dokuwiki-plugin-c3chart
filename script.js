jQuery(document).ready(function() {
    jQuery("[id^=__c3chart_]").each(function(i, div) { try {
        var c3data = jQuery(div).attr('c3data');
        c3.generate(jsyaml.load(decodeURIComponent(escape(atob(c3data)))));
    }catch(err){
        console.warn(err.message);
    }});
});
