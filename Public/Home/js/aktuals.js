global_current_elem = 1;
global_elem_hovered = 0;

var interval_variable = setInterval("autoScroll()",2000);

function scrollToElem(elem) {
	jQuery('#aktuals_field').scrollTo('#aktuals'+elem, 500, {easing:'easeInOutExpo', axis:'x' });
	set_active_btn(elem);
	global_current_elem = elem;
	reset_interval();
}

function scrollRight() {
	if (global_current_elem == 5) {elem = 1;}
	else {elem = global_current_elem + 1;}
	jQuery('#aktuals_field').scrollTo('#aktuals'+elem, 1100, {easing:'easeInOutExpo', axis:'x' });
	set_active_btn(elem);
	global_current_elem = elem;
}

function scrollLefty() {
	if (global_current_elem == 1) {elem = 5;}
	else {elem = global_current_elem - 1;}
	jQuery('#aktuals_field').scrollTo('#aktuals'+elem, 1100, {easing:'easeInOutExpo', axis:'x' });
	set_active_btn(elem);
	global_current_elem = elem;	
}

function autoScroll() {
	if(global_elem_hovered === 0 ) {scrollRight();}
}

function set_hover_on() {
	global_elem_hovered = 1;
} 

function set_hover_off() {
	global_elem_hovered = 0;
	reset_interval();
}

function set_active_btn(elem) {
	
	jQuery("#aktuals1_btn").removeClass("active");
	jQuery("#aktuals2_btn").removeClass("active");
	jQuery("#aktuals3_btn").removeClass("active");
	jQuery("#aktuals4_btn").removeClass("active");
	jQuery("#aktuals5_btn").removeClass("active");
	
	jQuery("#aktuals"+elem+"_btn").addClass("active");
}

function reset_interval() {
	clearInterval(interval_variable);
	interval_variable = setInterval("autoScroll()",2000);
}
