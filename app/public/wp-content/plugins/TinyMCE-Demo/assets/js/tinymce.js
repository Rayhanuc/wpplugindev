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


		editor.addButton('tmcd_listbox_one', {
			type: 'listbox',
			text: 'Select Something',
			values:[
				{text:'Apple',value:'You have selcted <b>Apple</b>'},
				{text:'Orange',value:'You have selcted <em>Orange</em>'},
				{text:'Banana',value:'You have selcted <u>Banana</u>'}
			],
			onselect:function(){
				editor.insertContent(this.value());
			},
			onPostRender:function(){
				this.value('You have selcted <em>Orange</em>');
			}
		});


		editor.addButton('tmcd_form_button', {
			// type: 'listbox',
			text: 'Form',
			onclick: function() {
				// alert("হেলো");
				editor.windowManager.open({
					title: "User Input Form",
					body: [
						{
							type: 'textbox',
							name: 'userinput1',
							label: 'Some Text',
							value: 'hello'
						},
						{
							type: 'colorpicker',
							name: 'userinput2',
							label: 'Color',
							value: '#222222'
						},
						{
							type: 'listbox',
							name: 'userinput3',
							label: 'Options',
							values: [
								{text:'Option 1', value: 1},
								{text:'Option 2', value: 2},
								{text:'Option 3', value: 3}
							]
						},
					],
					onsubmit: function(e){
						// alert(e.data.userinput1);
						console.log(e.data.userinput1);
						console.log(e.data.userinput2);
						editor.insertContent("Text = "+e.data.userinput1 + " Color = "+e.data.userinput2);
					}
				});
			}
		});


		editor.addButton('tmcd_menu_one', {
			type: 'menubutton',
			text: 'Choices',
			menu: [
				{
					text:'Option A',
					menu:[
						{
							text: "Option A - 1",
							onclick:function(){
								console.log('Option A - 1')
							}
						},
						{
							text: "Option A - 2",
							onclick:function(){
								console.log('Option A - 2')
							}
						},
						{
							text: "Option A - 3",
							onclick:function(){
								console.log('Option A - 3')
							}
						}
					]
				},
				{
					text:'Option B',
					onclick:function(){
						console.log('Option B')
					}
				},
				{
					text:'Option C',
					menu:[
						{
							text: "Option C - 1",
							onclick:function(){
								console.log('Option C - 1')
							}
						},
						{
							text: "Option C - 2",
							onclick:function(){
								console.log('Option C - 2')
							}
						},
						{
							text: "Option C - 3",
							menu:[
								{
									text: "Option C - 3 - 1",
									onclick:function(){
										console.log('Option C - 3 - 1')
									}
								},
								{
									text: "Option C - 3 - 2",
									onclick:function(){
										console.log('Option C - 3 - 2')
									}
								},
								{
									text: "Option C - 3 - 3",
									onclick:function(){
										console.log('Option C - 3 - 3')
									}
								}
							]
						}
					]
				},
			]
		});
	});
})(jQuery);