var m = 1;
var d = 1;
var t = 1;
var today;
function calcDateFormat(curDate) {
	dayNames = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
	monthNames = ['January','February','March','April','May','June','July','August','September','October','November','Decemeber']
	day = dayNames[curDate.getDay()];
	month = monthNames[curDate.getMonth()];
	date = curDate.getDate();
	dateTag = "";
	switch(date % 10) {
		case 1: dateTag = "st";
		break;
		case 2: dateTag = "nd";
		break;
		case 3: dateTag = "rd";
		break;
		default: dateTag = "th";
	}
	return (day + ", " + date + dateTag + " " + month);
}

function dateSet() {
	today = new Date();
	var tomorrow = new Date(today.getTime() + 86400000);
	var dayAfter = new Date(tomorrow.getTime() + 86400000);
	document.getElementById("dropdown-date-list").children[0].children[0].innerHTML = calcDateFormat(today);
	document.getElementById("dropdown-date-list").children[0].children[1].innerHTML = calcDateFormat(tomorrow);
	document.getElementById("dropdown-date-list").children[0].children[2].innerHTML = calcDateFormat(dayAfter);
}
window.onload = function() {
	dateSet(); 
	pars = {};
	query = window.location.search;
	if (query.length > 0) {
	selections = window.location.search.substring(1).split("&");
	m = selections[0].split('=')[1];
	d = selections[1].split('=')[1];
	if (selections.length == 3) {
		t = selections[2].split('=')[1];
	}
	if (m > 0)
		document.getElementById('select-movie-name').value = document.getElementById("dropdown-movie-list").children[0].children[m-1].innerHTML;
	if (d > 0)
		document.getElementById('select-movie-date').value = document.getElementById("dropdown-date-list").children[0].children[d-1].innerHTML;
	}
};
function toggleMovieDropdown() {
	toggleDropdown(document.getElementById('dropdown-movie-list'));
}
function toggleDateDropdown() {
	toggleDropdown(document.getElementById('dropdown-date-list'));
}
function toggleDropdown(dispStat) {
	if(dispStat.style.display == "" || dispStat.style.display == "none")
		dispStat.style.display = "block";
	else if(dispStat.style.display == "block")
		dispStat.style.display = "none";
}
function selectedMovie(reqVal, _m) {
	document.getElementById('select-movie-name').value=reqVal;
	m = _m;
	toggleMovieDropdown();
}
function selectedDate(reqVal, _d) {
	document.getElementById('select-movie-date').value=reqVal;
	d = _d;
	toggleDateDropdown();
}