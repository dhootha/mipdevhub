function glogin(clientid,burl,scope) {
	url  = 'https://accounts.google.com/o/oauth2/';
	url += 'auth?client_id='+clientid;
	url += '&redirect_uri='+burl;
	url += '&scope='+scope;
	url += '&response_type=token';
	location.href = url; 
}