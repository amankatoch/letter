$(function() { 

	$("#newsletter-builder-area-center-frame-buttons-dropdown").hover(
	  function() {
	    $(".newsletter-builder-area-center-frame-buttons-content").fadeIn(200);
	  }, function() {
	    $(".newsletter-builder-area-center-frame-buttons-content").fadeOut(200);
	  }
	);


	$("#add-header").hover(function() {
	    $(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='header']").show()
		$(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='content']").hide()
		$(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='footer']").hide()
	  });
	  
	$("#add-content").hover(function() {
	    $(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='header']").hide()
		$(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='content']").show()
		$(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='footer']").hide()
	  });
	  
	$("#add-footer").hover(function() {
	    $(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='header']").hide()
		$(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='content']").hide()
		$(".newsletter-builder-area-center-frame-buttons-content-tab[data-type='footer']").show()
	  });   
	  
	  
	  
	 $(".newsletter-builder-area-center-frame-buttons-content-tab").hover(
	  function() {
	    $(this).append('<div class="newsletter-builder-area-center-frame-buttons-content-tab-add"><i class="fa fa-plus"></i>&nbsp;Insert</div>');
		$('.newsletter-builder-area-center-frame-buttons-content-tab-add').click(function() {

		var el = $("#newsletter-preloaded-rows .esf-row[data-id='"+$(this).parent().attr("data-id")+"']").clone();
		el.css('display','none');
		$("#newsletter-builder-area-center-frame-content #row-footer").before(el);
		el.slideDown(function(){
			$("#newsletter-builder-area-center-frame-content").sortable('refresh');
			set_height();

			//Go To Bottom Of the Page after adding new row
			setTimeout(function(){
				parent.scroll_to_bottom();
			},300);
			
		});

		//$("#newsletter-builder-area-center-frame-content").prepend(el);
		//el.fadeIn();

		hover_edit();
		perform_delete();
		//$("#newsletter-builder-area-center-frame-buttons-dropdown").fadeOut(200);
			})
	  }, function() {
	    $(this).children(".newsletter-builder-area-center-frame-buttons-content-tab-add").remove();
	  }
	); 

	function set_height(){
		parent.iframeLoaded();
		save_template();
	}

	function save_template(){
		parent.export_template();
	}
	  
	//Edit
	function hover_edit(){

		$(".esf-row-edit").unbind();

		$(document).on("mouseenter",".esf-row-edit",function(){

			if($(this).data('remove') == true){
				$(this).append('<div class="delete-column"><i class="fa fa-times" style="line-height:30px;"></i></div><div class="esf-row-edit-hover"><i class="fa fa-pencil" style="line-height:30px;"></i></div>');
				$('.delete-column').click(function(e){
					e.preventDefault();
					$(this).closest('td').remove();
				});
			}else{
				$(this).append('<div class="esf-row-edit-hover"><i class="fa fa-pencil" style="line-height:30px;"></i></div>');
			}

			$(".esf-row-edit-hover").click(function(e) {e.preventDefault()});
			$(".esf-row-edit-hover i").click(function(e) {
			e.preventDefault();

			big_parent = $(this).parent().parent();
				
				var mod_type = big_parent.attr("data-type");
				if(mod_type == 'image'){
					var img = big_parent.find('img');
					img.addClass('update-image'); 
					parent.show_media_manager();

				}else{
					big_parent.addClass('editing');
					parent.edit_module(mod_type,big_parent);
				}
			
			});
		});

		$(document).on("mouseleave",".esf-row-edit",function(){
			$(this).children(".esf-row-edit-hover").remove();
			if($(this).data('remove') == true){
				$(this).children(".delete-column").remove();
			}
		});

	}
	hover_edit();
	   
	//Drag & Drop

	function drag_drop(){
		$("#newsletter-builder-area-center-frame-content").sortable({
		  revert: 100,
		  axis: "y",
		  items: '.sort-row',
		  start: function( event, ui ){
		  	$('.ui-sortable').addClass('dragging');
		  },
		  stop: function(event,ui){
		  	$('.ui-sortable').removeClass('dragging');
		  	save_template();
		  }
		});
		$(".esf-row").draggable({
			  axis: "y",
			  containment: 'parent',
		      connectToSortable: "#newsletter-builder-area-center-frame-content",
		      //helper: "clone",
		      revert: "valid",
		      revertDuration: 100,
			  handle: ".esf-row-move"
		});
	}
	drag_drop();

	//Delete
	function add_delete(){
		$(".sort-row").append('<div class="esf-row-delete"><i class="fa fa-times" ></i></div><div style="display:none !important" class="esf-row-editrow"><i class="fa fa-pencil" ></i></div>');
		
		}
	add_delete();

	function perform_delete(){
		$(".esf-row-delete").click(function() {
			var el = $(this).parent()
			el.css('opacity','0');
			el.slideUp(function(){
				el.remove();
				set_height();
			});
		  //$(this).parent().remove();
		});
	}
	perform_delete();

	//Add icons to footer
	function add_new_button(){
		var area = $('.add-new-button-area');
		area.append('<div class="add-new-button" style="display:none" data-for="icon"><i class="fa fa-plus" ></i></div>');

		$(document).on('click','.add-new-button',function(){
			var type = $(this).data('for');
			$(this).parents('.add-new-button-area').addClass('editing');
			parent.add_new_icon(type);
		});

		$("#newsletter-builder-area-center-frame-content").hover(
			function(){
				area.find('.add-new-button').stop().fadeIn();
			},
			function(){
				area.find('.add-new-button').stop().fadeOut();
			}
		);
	}	
	add_new_button();

});