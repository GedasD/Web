//Message thank you
var getUrlParameter = function getUrlParameter(sParam) {
var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	sURLVariables = sPageURL.split('&'),
	sParameterName,
	i;

for (i = 0; i < sURLVariables.length; i++) {
	sParameterName = sURLVariables[i].split('=');

	if (sParameterName[0] === sParam) {
		return sParameterName[1] === undefined ? true : sParameterName[1];
	}
}
};
var y = getUrlParameter('ok');

 if(y==1){
	alert('Dėkojame už suteiktą atsiliepimą');
 }
 else if(error=="InvalidLogIn"){
		alert('Neteisinga');
}
 
	
