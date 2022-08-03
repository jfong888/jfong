const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://animi.p.rapidapi.com/name?name=Levi",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "SIGN-UP-FOR-KEY",
		"X-RapidAPI-Host": "animi.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});