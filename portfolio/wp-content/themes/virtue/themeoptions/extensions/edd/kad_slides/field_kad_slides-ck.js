jQuery(document).ready(function(){jQuery(".redux-slides-remove").live("click",function(){redux_change(jQuery(this));jQuery(this).parent().siblings().find('input[type="text"]').val("");jQuery(this).parent().siblings().find("textarea").val("");jQuery(this).parent().siblings().find('input[type="hidden"]').val("");var e=jQuery(this).parents(".redux-container-kad_slides:first").find(".redux-slides-accordion-group").length;if(e>1)jQuery(this).parents(".redux-slides-accordion-group:first").slideUp("medium",function(){jQuery(this).remove()});else{jQuery(this).parents(".redux-slides-accordion-group:first").find(".remove-image").click();jQuery(this).parents(".redux-container-kad_slides:first").find(".redux-slides-accordion-group:last").find(".redux-slides-header").text("New Slide")}});jQuery(".kad_redux-slides-add").click(function(){var e=jQuery(this).prev().find(".redux-slides-accordion-group:last").clone(!0),t=jQuery(e).find('input[type="text"]').attr("name").match(/\d+/),n=t*1+1;jQuery(e).find('input[type="text"], .redux-slides-list input[type="checkbox"], input[type="hidden"], textarea').each(function(){jQuery(this).attr("name",jQuery(this).attr("name").replace(/\d+/,n)).attr("id",jQuery(this).attr("id").replace(/\d+/,n));jQuery(this).val("");jQuery(this).hasClass("slide-sort")&&jQuery(this).val(n)});jQuery(e).find(".screenshot").removeAttr("style");jQuery(e).find(".screenshot").addClass("hide");jQuery(e).find(".screenshot a").attr("href","");jQuery(e).find(".remove-image").addClass("hide");jQuery(e).find('.icon-link-target input[type="checkbox"]').val("");jQuery(e).find('.icon-link-target input[type="checkbox"]').attr("checked",!1);jQuery(e).find(".redux-slides-image").attr("src","").removeAttr("id");jQuery(e).find("h3").text("").append('<span class="redux-slides-header">New slide</span><span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>');jQuery(this).prev().append(e)});jQuery(".slide-title").keyup(function(e){var t=e.target.value;jQuery(this).parents().eq(3).find(".redux-slides-header").text(t)});jQuery(function(){jQuery(".redux-slides-accordion").accordion({header:"> div > fieldset > h3",collapsible:!0,active:!1,heightStyle:"content",icons:{header:"ui-icon-plus",activeHeader:"ui-icon-minus"}}).sortable({axis:"y",handle:"h3",connectWith:".redux-slides-accordion",start:function(e,t){t.placeholder.height(t.item.height());t.placeholder.width(t.item.width())},placeholder:"ui-state-highlight",stop:function(e,t){t.item.children("h3").triggerHandler("focusout");var n=jQuery("input.slide-sort");n.each(function(e){jQuery(this).val(e)})}})})});