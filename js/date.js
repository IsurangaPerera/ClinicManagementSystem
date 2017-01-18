
/**
 * Date which can be use throughout the program
 * @param {}
 * @return {}
 */
function getDate(){
	d = new Date();
	t = d.getTime().toString();
	t = t.substring(t.length-4, t.length);
	date = ((d.getFullYear())+'-'+(d.getMonth()+1)+'-'+d.getDate());

	return date;
}