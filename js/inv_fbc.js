var objectoFbc = {
	"fbc" 			 : [],
	"report_details" : []
};

var report_id, sample_index;
var fields = ['white_cells', 'red_cells', 'haemoglobin', 'platelets', 'haematocrit',
			  'polymorphs', 'lymphocytes', 'monocytes', 'eosinophils', 'basophils'];
var fbsMap = new Object();

var index = 0;

/**
 * FBC Collection data validation
 * @param {}
 * @return {}
 */
function saveFBC(){
	$("table tr :input").each(function () {
    	if(this.id === "report_id"){
    		report_id = this.value;
    		fbsMap["report_id"] = report_id;
    	}
    	else if(this.id === "sample_index")
    		sample_index = this.value;
    	else{
    		fbsMap[fields[index]] = this.value.trim();
    		index += 1;
    	}
	});

	objectoFbc.fbc.push(fbsMap);
	objectoFbc.report_details.push({
		"sample_index" : sample_index,
		"report_id"    : report_id,
		"date"         : getDate()
	});

	postInv();
	index = 0;
}

/**
 * Send data to server
 * @param {}
 * @return {}
 */
function postInv(){
	$.ajax({
		type: "POST",
     	url: "../report/fbs/register",
		data: JSON.stringify(objectoFbc),
		success: function( data, textStatus, jQxhr ){
			alertify.success("Operation Successful");
			$("table tr :input").each(function () {
				this.value = "";
			});	
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("Try Again");

		}
	});
}