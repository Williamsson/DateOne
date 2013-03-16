//Finds the base URL of the site
function getBaseURL(){
	var url =  location.protocol + "//" + location.hostname + 
	(location.port && ":" + location.port) + "/";
	//SKALL TAS BORT VID DEPLOY:
	url = url + 'DateOne/';
	return url;
}


$(function(){
	
	
});