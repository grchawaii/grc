/** xe_sunooNSLg layout for Xpress Engine. Layout Design by Sunoo (http://www.goodpr.me/) ***/
/*
 * Easy Favorites
 * On mouse-over when Menu show effect
 */

//
function favorites(title,url){ 
  if(document.all){ // ie
     window.external.AddFavorite(url, title);  }
  else if(window.sidebar){ // firefox 
     window.sidebar.addPanel(title, url, "");  }
  else if(window.opera && window.print){ // opera 
     var obj = document.createElement('a');
     obj.setAttribute('href',url);
     obj.setAttribute('title',title);
     obj.setAttribute('rel','sidebar');
     obj.click();  }  
}

// 
function show(id) {
	document.getElementById(id).style.display="block";  }
function hide(id) {
	var evt = window.event;
	document.getElementById(id).style.display="none";
	if (evt.stopPropagation) { 
	evt.stopPropagation(); 	} 
	else { 
	evt.cancelBubble = true; 	}  }

window.onclick = function(){clearAll();}
function clearAll(){
clearMenu3();clearMenu2();clearMenu1();  }

function clearMenu3() {
	var mi = document.getElementsByTagName("table"); 
	for(var i=0,len=mi.length ; i<len ; i++) { 
		if(mi[i].id.substr(0,6) == "menu3_") { 
			document.getElementById(mi[i].id).style.display="none";		} 	}  }

function clearMenu2() {
	var mi = document.getElementsByTagName("table"); 
	for(var i=0,len=mi.length ; i<len ; i++) { 
		if(mi[i].id.substr(0,6) == "menu2_") { 
			document.getElementById(mi[i].id).style.display="none";		} 	}  }

function clearMenu1() {
	var mi = document.getElementsByTagName("table"); 
	for(var i=0,len=mi.length ; i<len ; i++) { 
		if(mi[i].id.substr(0,5) == "menu_") { 
			document.getElementById(mi[i].id).style.display="none";		} 	}	 }



 