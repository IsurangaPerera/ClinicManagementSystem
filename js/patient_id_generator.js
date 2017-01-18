/**
 * Generate a patient Id based on 
 * patient's birthdate and gender
 */
function generateId(birthdate, gender){
	date = birthdate.trim();
	d_temp = date.split('-');
	year = d_temp[0].substring(1,4);
	date = year+d_temp[1]+d_temp[2];
	gen = gender.trim();
	if(gen === 'Female'){
		rand = randomIntFromInterval(0, 49999);
		rand = pad(rand, 5);
	}
	else if(gen === 'Male'){
		rand = randomIntFromInterval(50000, 99999);
	}
	else{
		$("#code128").html("");
		$("#barimg").hide(1000);
		return;
	}

	incremental_val = 1; //temp value

	id = date + rand.toString() + incremental_val.toString();
	$("#patientID").val(id);
	$("#code128").html("");
	JsBarcode("#code128", id);
	$("#barimg").show(1000);
}

/**
 * Generate a random number from a given interval
 * @param {min_val, max_val}
 * @return {random int}
 */
function randomIntFromInterval(min,max){

    return Math.floor(Math.random()*(max-min+1)+min);
}

/**
 * Pad additional space with bits
 * @param {n, width, z}
 * @return {n}
 */
function pad(n, width, z){
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}