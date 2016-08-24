(function(){

    // Each setting used to be defined globally. To prevent naming conflicts
    // they were moved into AAPPetScrollerSettings. This method preserves
    // backward compatibility for sites that still have them defined globally.
    function get_settings(){
	if(typeof AAPPetScrollerSettings === 'undefined'){
	    return {
		'searchtools_box_width': window.searchtools_box_width,
		'searchtools_box_height': window.searchtools_box_height,
		'size': window.size,
		'title': window.title,
		'clan_name': window.clan_name,
		'color': window.color,
		'shelter_id': window.shelter_id,
		'sort_by': window.sort_by
	    };	    
	} else {
	    return AAPPetScrollerSettings;
	}
    }

    function quote(val) {
	return val != null ? '"' + val + '"' : '""';
    }

    function DoWrite() {
	var settings = get_settings();
    var base_url = settings.searchtools_root_url ? settings.searchtools_root_url : "//searchtools.adoptapet.com";
	var height = Number(settings.searchtools_box_height) + 10;
	var url = base_url + "/cgi-bin/searchtools.cgi/portable_pet_list?shelter_id=" + settings.shelter_id + "&size=" + settings.size + "&color=" + settings.color + "&clan_name=" + settings.clan_name + "&title=" + settings.title;
        if (settings.sort_by) {
            url += "&sort_by=" + settings.sort_by;
        }
        if (settings.clan_name) {
		//Don't hide Dog/Cat Filter Switch
            url += "&hide_clan_filter_p=0";
        }
		
	//Responsive iframe Container
	//Include CSS in Parent Page regardless of cross domainship
	/*
				.intrinsic-container {
				  position: relative;
				  height: 0;
				  overflow: hidden;
				}
				 
				// 16x9 Aspect Ratio
				.intrinsic-container-16x9 {
				  padding-bottom: 56.25%;
				}
				 
				// 4x3 Aspect Ratio 
				.intrinsic-container-4x3 {
				  padding-bottom: 75%;
				}
				 
				.intrinsic-container iframe {
				  position: absolute;
				  top:0;
				  left: 0;
				  width: 100%;
				  height: 100%;
				}
	*/
	//div for Responsive iFrame
	//document.write("<div class='intrinsic-container'>");

	document.write('<iframe name="sap_searchtools_frame" seamless src=' + quote(url)
		       + ' marginwidth="0" marginheight="0" allowtransparency="true" scrolling="auto" width="100%" height="1000px"></iframe>'
		       );
			  
	//document.write("</div>");
	
    }

    DoWrite();
})()