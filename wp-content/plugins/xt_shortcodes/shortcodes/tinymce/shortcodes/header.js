var previewSrc = "";
var sample = '';

var content = '';

var description = '';

xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Header Type",
			id:"tag",
			help:"Which header you want use", 
			controlType:"select-control", 
			selectValues:['h1', 'h2', 'h3', 'h4', 'h5', 'h6']
		},
		{
			label:"Text",
			id:"text",
			help:"Text to be displayed in the header"
		},
		{
			label:"Optional Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		}
		],
	defaultContent:content,
	shortcode:"header"
};