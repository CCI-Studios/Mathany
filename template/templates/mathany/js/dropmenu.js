(function(window, document, undefined) {
	
	window.addEvent('domready', function() {
		var mm, items, submenus, i, ul, submenu, content, top, bottom;
		
		mm = $('mainmenu');
		items = mm.getChildren();
		submenus = new Array();
		
		for (i = 0; i < items.length; i++) {
			ul = items[i].getElement('ul');
			
			if (ul !== null) {
				submenus.push(ul)
				
				submenu = new Element('div', { class: 'submenu' });
				content = new Element('div', { class: 'content' });
				top = new Element('div', { class: 'top' });
				bottom = new Element('div', { class: 'bottom' });

				submenu.adopt(content);
				content.adopt(top);
				content.adopt(ul)
				submenu.adopt(bottom)
				bottom.adopt(new Element('div'));
				items[i].adopt(submenu);
			}
		}
	});
	
	
})(this, this.document)