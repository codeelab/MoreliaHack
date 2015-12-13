[javascript]
var sections = $$(SECTION_SEL);
for(var i = 0; i<sections.length; i++){
var index = i;
var section = sections[i];
var that = section;
var slides = $$(SLIDE_SEL, section);
var numSlides = slides.length;

if(!index && $(SECTION_ACTIVE_SEL) === null) {
addClass(section, ACTIVE);
}

if (typeof options.anchors[index] !== ‘undefined’) {
section.setAttribute(‘data-anchor’, options.anchors[index]);

if(hasClass(section, ACTIVE)){
activateMenuAndNav(options.anchors[index], index);
}
}
}</p>
<p style="text-align: left;">[/javascript]