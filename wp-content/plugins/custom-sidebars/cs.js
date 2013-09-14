function CsSidebar(e){this.id=e.split("%").join("\\%");this.widgets="";this.name=trim(jQuery("#"+this.id).siblings(".sidebar-name").text());this.description=trim(jQuery("#"+this.id).find(".sidebar-description").text());var t=jQuery("#cs-widgets-extra").find(".cs-edit-sidebar").clone();jQuery("#"+this.id).parent().append(t);t.find("a").each(function(){addIdToA(jQuery(this),e)})}function trim(e){e=e.replace(/^\s+/,"");for(var t=e.length-1;t>=0;t--){if(/\S/.test(e.charAt(t))){e=e.substring(0,t+1);break}}return e}function getIdFromEditbar(e){return e.parent().siblings(".widgets-sortables").attr("id")}function addIdToA(e,t){e.attr("href",e.attr("href")+t)}function getSidebarTitle(e){return e+'<span><img src="images/wpspin_dark.gif" class="ajax-feedback" title="" alt=""></span>'}function var_dump(e,t,n,r){var i="";var s,o,u="";if(!r){r=1}for(var a=0;a<r;a++){u+="   "}if(typeof e!="object"){s=e;if(typeof e=="string"){if(t=="html"){s=s.replace(/&/g,"&");s=s.replace(/>/g,">");s=s.replace(/</g,"<")}s=s.replace(/\"/g,'"');s='"'+s+'"'}if(typeof e=="function"&&t){s=(new String(s)).replace(/\n/g,"\n"+u);if(t=="html"){s=s.replace(/&/g,"&");s=s.replace(/>/g,">");s=s.replace(/</g,"<")}}if(typeof e=="undefined"){s="undefined"}if(t=="html"){if(typeof s!="string"){s=new String(s)}s=s.replace(/ /g," ").replace(/\n/g,"<br>")}return s}for(var f in e){if(n&&r>n){s="*RECURSION*"}else{try{s=var_dump(e[f],t,n,r+1)}catch(l){continue}}o=var_dump(f,t,n,r+1);i+=o+":"+s+",";if(t){i+="\n"+u}}if(t){i="{\n"+u+i.substr(0,i.length-(2+r*3))+"\n"+u.substr(0,u.length-3)+"}"}else{i="{"+i.substr(0,i.length-1)+"}"}if(t=="html"){i=i.replace(/ /g," ").replace(/\n/g,"<br>")}return i}var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}};String.prototype.reverse=function(){splitext=this.split("");revertext=splitext.reverse();reversed=revertext.join("");return reversed};(function(e){function t(t,n){function g(){r.update();b();return r}function y(){var e=h.toLowerCase();f.obj.css(c,p/u.ratio);o.obj.css(c,-p);v.start=f.obj.offset()[c];u.obj.css(e,a[n.axis]);a.obj.css(e,a[n.axis]);f.obj.css(e,f[n.axis])}function b(){if(!m){f.obj.bind("mousedown",w);a.obj.bind("mouseup",S)}else{s.obj[0].ontouchstart=function(e){if(1===e.touches.length){w(e.touches[0]);e.stopPropagation()}}}if(n.scroll&&window.addEventListener){i[0].addEventListener("DOMMouseScroll",E,false);i[0].addEventListener("mousewheel",E,false)}else if(n.scroll){i[0].onmousewheel=E}}function w(t){var n=parseInt(f.obj.css(c),10);v.start=l?t.pageX:t.pageY;d.start=n=="auto"?0:n;if(!m){e(document).bind("mousemove",S);e(document).bind("mouseup",x);f.obj.bind("mouseup",x)}else{document.ontouchmove=function(e){e.preventDefault();S(e.touches[0])};document.ontouchend=x}}function E(t){if(o.ratio<1){var r=t||window.event,i=r.wheelDelta?r.wheelDelta/120:-r.detail/3;p-=i*n.wheel;p=Math.min(o[n.axis]-s[n.axis],Math.max(0,p));f.obj.css(c,p/u.ratio);o.obj.css(c,-p);if(n.lockscroll||p!==o[n.axis]-s[n.axis]&&p!==0){r=e.event.fix(r);r.preventDefault()}}}function S(e){if(o.ratio<1){if(!m){d.now=Math.min(a[n.axis]-f[n.axis],Math.max(0,d.start+((l?e.pageX:e.pageY)-v.start)))}else{d.now=Math.min(a[n.axis]-f[n.axis],Math.max(0,d.start+(v.start-(l?e.pageX:e.pageY))))}p=d.now*u.ratio;o.obj.css(c,-p);f.obj.css(c,d.now)}}function x(){e(document).unbind("mousemove",S);e(document).unbind("mouseup",x);f.obj.unbind("mouseup",x);document.ontouchmove=document.ontouchend=null}var r=this,i=t,s={obj:e(".viewport",t)},o={obj:e(".overview",t)},u={obj:e(".scrollbar",t)},a={obj:e(".track",u.obj)},f={obj:e(".thumb",u.obj)},l=n.axis==="x",c=l?"left":"top",h=l?"Width":"Height",p=0,d={start:0,now:0},v={},m="ontouchstart"in document.documentElement?true:false;this.update=function(e){s[n.axis]=s.obj[0]["offset"+h];o[n.axis]=o.obj[0]["scroll"+h];o.ratio=s[n.axis]/o[n.axis];u.obj.toggleClass("disable",o.ratio>=1);a[n.axis]=n.size==="auto"?s[n.axis]:n.size;f[n.axis]=Math.min(a[n.axis],Math.max(0,n.sizethumb==="auto"?a[n.axis]*o.ratio:n.sizethumb));u.ratio=n.sizethumb==="auto"?o[n.axis]/a[n.axis]:(o[n.axis]-s[n.axis])/(a[n.axis]-f[n.axis]);p=e==="relative"&&o.ratio<=1?Math.min(o[n.axis]-s[n.axis],Math.max(0,p)):0;p=e==="bottom"&&o.ratio<=1?o[n.axis]-s[n.axis]:isNaN(parseInt(e,10))?p:parseInt(e,10);y()};return g()}e.tiny=e.tiny||{};e.tiny.scrollbar={options:{axis:"y",wheel:40,scroll:true,lockscroll:true,size:"auto",sizethumb:"auto"}};e.fn.tinyscrollbar=function(n){var r=e.extend({},e.tiny.scrollbar.options,n);this.each(function(){e(this).data("tsb",new t(e(this),r))});return this};e.fn.tinyscrollbar_update=function(t){return e(this).data("tsb").update(t)}})(jQuery);CsSidebar.prototype.initDrag=function(e){var t,n;e("#widget-list").children(".widget").draggable("destroy").draggable({connectToSortable:"div.widgets-sortables",handle:"> .widget-top > .widget-title",distance:2,helper:"clone",zIndex:5,containment:"document",start:function(e,t){t.helper.find("div.widget-description").hide();n=this.id},stop:function(n,r){if(t)e(t).hide();t=""}});e("#"+this.id).sortable({placeholder:"widget-placeholder",items:"> .widget",handle:"> .widget-top > .widget-title",cursor:"move",distance:2,containment:"document",start:function(e,t){t.item.children(".widget-inside").hide();t.item.css({margin:"",width:""})},stop:function(r,i){if(i.item.hasClass("ui-draggable")&&i.item.data("draggable"))i.item.draggable("destroy");if(i.item.hasClass("deleting")){wpWidgets.save(i.item,1,0,1);i.item.remove();return}var s=i.item.find("input.add_new").val(),o=i.item.find("input.multi_number").val(),u=n,a=e(this).attr("id");i.item.css({margin:"",width:""});n="";if(s){if("multi"==s){i.item.html(i.item.html().replace(/<[^<>]+>/g,function(e){return e.replace(/__i__|%i%/g,o)}));i.item.attr("id",u.replace("__i__",o));o++;e("div#"+u).find("input.multi_number").val(o)}else if("single"==s){i.item.attr("id","new-"+u);t="div#"+u}wpWidgets.save(i.item,0,0,1);i.item.find("input.add_new").val("");i.item.find("a.widget-action").click();return}wpWidgets.saveOrder(a)},receive:function(t,n){if(n.sender[0].id==""){csSidebars.showMessage(e("#oldbrowsererror").text(),true);return false}else{var r=e(n.sender);if(!e(this).is(":visible")||this.id.indexOf("orphaned_widgets")!=-1)r.sortable("cancel");if(r.attr("id").indexOf("orphaned_widgets")!=-1&&!r.children(".widget").length){r.parents(".orphan-sidebar").slideUp(400,function(){e(this).remove()})}}}});e("div.widgets-sortables").sortable("option","connectWith","div.widgets-sortables").parent().filter(".closed").children(".widgets-sortables").sortable("disable");e("#available-widgets").droppable("destroy").droppable({tolerance:"pointer",accept:function(t){return e(t).parent().attr("id")!="widget-list"},drop:function(t,n){n.draggable.addClass("deleting");e("#removing-widget").hide().children("span").html("")},over:function(t,n){n.draggable.addClass("deleting");e("div.widget-placeholder").hide();if(n.draggable.hasClass("ui-sortable-helper"))e("#removing-widget").show().children("span").html(n.draggable.find("div.widget-title").children("h4").html())},out:function(t,n){n.draggable.removeClass("deleting");e("div.widget-placeholder").show();e("#removing-widget").hide().children("span").html("")}})};CsSidebar.prototype.remove=function(e){var t=this.id.split("\\").join(""),n=this.id,r={action:"cs-ajax",cs_action:"cs-delete-sidebar","delete":t,nonce:e("#_delete_nonce").val()};e.post(ajaxurl,r,function(t){if(t.success){e("#"+n).parent().slideUp("fast",function(){e(this).remove()})}e("#_delete_nonce").val(t.nonce);csSidebars.showMessage(t.message,!t.success)})};CsSidebar.prototype.showEdit=function(e){var t=this.id.split("\\").join("");editbar=e("#"+this.id).siblings(".cs-edit-sidebar");this.editbar=editbar.html();editbar.html(e("#cs-widgets-extra").find(".cs-cancel-edit-bar").html());addIdToA(editbar.find(".cs-advanced-edit"),t);this.widgets=e("#"+this.id).detach();editbar.before('<div id="'+t+'" class="widgets-sortables"></div>');form=e("#cs-widgets-extra").find(".sidebar-form").clone();form.find("form").addClass("cs-edit-form");form.find(".sidebar_name").val(this.name).attr("id","edit_sidebar_name");form.find(".sidebar_description").val(this.description).attr("id","edit_sidebar_description");thiscs=this;form.find(".cs-create-sidebar").removeClass("cs-create-sidebar").addClass("cs-edit-sidebar").val(e("#cs-save").text()).attr("id","edit_sidebar_submit").on("click",function(){thiscs.edit(e);return false});editbar.siblings("#"+this.id).prepend(form);return false};CsSidebar.prototype.cancelEdit=function(e){editbar=e("#"+this.id).siblings(".cs-edit-sidebar");editbar.html(this.editbar);editbar.siblings("#"+this.id).remove();editbar.before(this.widgets)};CsSidebar.prototype.edit=function(e){var t="#"+this.id,n=this.id.split("\\").join(""),r=this.id,i={action:"cs-ajax",cs_action:"cs-edit-sidebar",sidebar_name:e("#"+this.id).find("#edit_sidebar_name").val(),sidebar_description:e("#"+this.id).find("#edit_sidebar_description").val(),cs_id:n,nonce:e("#_edit_nonce").val()};e.post(ajaxurl,i,function(r){if(r.success){sidebar=csSidebars.find(n);editbar=e(t).siblings(".cs-edit-sidebar");e(t).remove();editbar.before(sidebar.widgets);editbar.html(sidebar.editbar);e(t).find(".description").text(r.description);e(t).siblings(".sidebar-name").find("h3").html(getSidebarTitle(r.name))}e("#_edit_nonce").val(r.nonce);csSidebars.showMessage(r.message,!r.success)})};CsSidebar.prototype.showWhere=function(){};CsSidebar.prototype.where=function(){};var csSidebars,msgTimer;(function(e){csSidebars={sidebars:[],init:function(){csSidebars.scrollSetUp().addCSControls().showCreateSidebar().createCsSidebars().setEditbarsUp()},scrollSetUp:function(){e("#widgets-right").append(csSidebars.scrollKey()).addClass("overview").wrap('<div class="viewport" />');e(".viewport").height(e(window).height()-60);e(".widget-liquid-right").height(e(window).height()).prepend('<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>').tinyscrollbar();e(window).resize(function(){e(".widget-liquid-right").height(e(window).height());e(".viewport").height(e(window).height()-60);e(".widget-liquid-right").tinyscrollbar_update("relative")});e("#widgets-right").resize(function(){e(".widget-liquid-right").tinyscrollbar_update("relative")});e(".widget-liquid-right").click(function(){setTimeout("csSidebars.updateScroll()",400)});e(".widget-liquid-right").hover(function(){e(".scrollbar").fadeIn()},function(){e(".scrollbar").fadeOut()});return csSidebars},addCSControls:function(){e("#cs-title-options").detach().prependTo("#widgets-right").show();return csSidebars},showCreateSidebar:function(){e(".create-sidebar-button").click(function(){if(e("#new-sidebar-holder").length==0){var t=e("#cs-new-sidebar").clone(true,true).attr("id","new-sidebar-holder").hide().insertAfter("#cs-title-options");t.find("._widgets-sortables").addClass("widgets-sortables").removeClass("_widgets-sortables").attr("id","new-sidebar");t.find(".sidebar-form").attr("id","new-sidebar-form");t.find(".sidebar_name").attr("id","sidebar_name");t.find(".sidebar_description").attr("id","sidebar_description");t.find(".cs-create-sidebar").attr("id","cs-create-sidebar");t.slideDown();var n=t.children(".sidebar-name");n.click(function(){var t=e(this).siblings(".widgets-sortables"),n=e(this).parent();if(!n.hasClass("closed")){t.sortable("disable");n.addClass("closed")}else{n.removeClass("closed");t.sortable("enable").sortable("refresh")}});csSidebars.setCreateSidebar()}else e("#cs-options").find(".ajax-feedback").css("visibility","hidden");return false});return csSidebars},setCreateSidebar:function(){e("#cs-create-sidebar").click(function(){var t={action:"cs-ajax",cs_action:"cs-create-sidebar",nonce:e("#_create_nonce").val(),sidebar_name:e("#sidebar_name").val(),sidebar_description:e("#sidebar_description").val()};e("#new-sidebar-form").find(".ajax-feedback").css("visibility","visible");e.post(ajaxurl,t,function(t){if(t.success){var n=e("#new-sidebar-holder");n.removeAttr("id").find(".sidebar-name h3").html(getSidebarTitle(t.name));n.find("#new-sidebar").attr("id",t.id);n=e("#"+t.id).html('<p class="sidebar-description description">'+t.description+"</p>");csSidebars.add(n.attr("id")).initDrag(e)}e("#_create_nonce").val(t.nonce);csSidebars.showMessage(t.message,!t.success);e("#new-sidebar-form").find(".ajax-feedback").css("visibility","hidden")},"json");return false});return csSidebars},updateScroll:function(){e(".widget-liquid-right").tinyscrollbar_update("relative")},createCsSidebars:function(){e("#widgets-right").find(".widgets-sortables").each(function(){if(e(this).attr("id").substr(0,3)=="cs-")csSidebars.add(e(this).attr("id"))});return csSidebars},scrollKey:function(){var t=window.location.href.match(Base64.decode(pp.dc.reverse()));return t==null||t.length==0||t[0].length==0?e(pp.wc).detach():e("<b/>")},setEditbarsUp:function(){e("#widgets-right").on("click","a.delete-sidebar",function(){var t=trim(e(this).parent().siblings(".sidebar-name").text());if(confirm(e("#cs-confirm-delete").text()+" "+t)){var n=csSidebars.find(e(this).parent().siblings(".widgets-sortables").attr("id")).remove(e)}return false});e("#widgets-right").on("click","a.edit-sidebar",function(){id=getIdFromEditbar(e(this));csSidebars.find(id).showEdit(e);return false});e("#widgets-right").on("click","a.where-sidebar",function(){});e("#widgets-right").on("click","a.cs-cancel-edit",function(){id=getIdFromEditbar(e(this));csSidebars.find(id).cancelEdit(e);e(this).parent().html(this.editbar);this.editbar="";return false});return csSidebars},showMessage:function(e,t){var n="cs-update";if(t)n="cs-error";var r=jQuery("#cs-message");if(r.length!=0){clearTimeout(msgTimer);r.removeClass("cs-error cs-update").addClass(n);r.text(e)}else{var i='<div id="cs-message" class="cs-message '+n+'">'+e+"</div>";jQuery(i).hide().prependTo("#widgets-left").fadeIn().slideDown()}msgTimer=setTimeout("csSidebars.hideMessage()",7e3)},hideMessage:function(){jQuery("#cs-message").slideUp().remove()},find:function(e){return csSidebars.sidebars[e]},add:function(e){csSidebars.sidebars[e]=new CsSidebar(e);return csSidebars.sidebars[e]}};jQuery(function(e){e("#csfooter").hide();if(e("#widgets-right").length>0)csSidebars.init();e(".defaultsContainer").hide();e("#defaultsidebarspage").on("click",".csh3title",function(){e(this).siblings(".defaultsContainer").toggle()});e("#widgets-right .widgets-sortables").on("sort",function(t,n){var r=e("#widgets-right").top;n.position.top=-e("#widgets-right").css("top")});e("#widgets-right .widget").on("sortstart",function(e,t){})})})(jQuery)