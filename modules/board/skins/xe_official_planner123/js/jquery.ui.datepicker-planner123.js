/* UI date picker plugin. min/max date control for planner123(V540). */
jQuery(function($){
	//var minPeriod = "{$module_info->min_period}";
	//var maxPeriod = "{$module_info->max_period}";
	//var ind_reservation = "{$ind_reservation}";
	//var lang_type = "{$lang_type}";
	var date = new Date(), y = date.getFullYear(), m = date.getMonth(), d = date.getDate();
	var monthEnd = new Date(y, m + 1, 0);
	var lastDay = monthEnd.getDate();
	if (minPeriod) {
		if (minPeriod === 'MF' ) {  //first day of month
			var minDay = '-' + (d-1) + 'D';
		} else {
			var minDay = minPeriod;
		}
	} 
	if (ind_reservation == 'T') {
		var minDay = '-0D';
	}
	if (maxPeriod) {
		if (maxPeriod === 'ML' ) {  //last day of month
			var maxDay = (lastDay-d) + 'D';
		} else {
			var maxDay = maxPeriod;
		}
	}
	if (lang_type === 'ko') {
		$.datepicker.regional['ko'] = {
			minDate: minDay, 
			maxDate: maxDay,
			yearSuffix: ''};
	} else {
		$.datepicker.regional['ko'] = {
			closeText: 'Done',
			prevText: 'Prev',
			nextText: 'Next',
			currentText: 'Today',
			monthNames: ['January','February','March','April','May','June',
			'July','August','September','October','November','December'],
			monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
			'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
			weekHeader: 'Wk',
			minDate: minDay, 
			maxDate: maxDay,
			yearSuffix: ''};
	}
	$.datepicker.setDefaults($.datepicker.regional['ko']);
});
