// alert('I am from TinyMCE-Demo pluin tinymce.js file');

;(function(){
	tinyMCE.PluginManager.add('tmcd_plugin',function(editor, url){
		editor.addButton('tmcd_button_one', {
			// text: 'B1',
			// icon: 'backcolor', // or image
			image: url+"/../images/cart.png",
			onclick:function(){
				editor.insertContent("[gmap]content[/gmap]");
			}
		});
		editor.addButton('tmcd_button_two', {
			// text: 'B2',
			icon: 'blockquote', // or image
			// image: url+"/../images/cart.png",
			onclick:function(){
				editor.insertContent("Button two");
			}
		});
		editor.addButton('tmcd_button_three', {
			// text: 'B2',
			icon: 'outdent', // or image
			// image: url+"/../images/cart.png",
			onclick:function(){
				editor.insertContent("Outdent");
			}
		});
	});
})(jQuery);