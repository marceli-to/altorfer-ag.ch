temp.jdMetaOg = USER
temp.jdMetaOg {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = JdOgmeta
    pluginName = Jdogmeta
    vendorName = Jamondigital
    controller = Main
    action = set
    view < plugin.tx_jdogmeta_jdogmeta.view
    persistence < plugin.tx_jdogmeta_jdogmeta.persistence
    settings < plugin.tx_jdogmeta_jdogmeta.settings
}

lib.jdMetaOg = COA
lib.jdMetaOg < temp.jdMetaOg


page = PAGE
page {
	
	typeNum = 0
	config {
		disableAllHeaderCode = 1
	}
	
	10 = FLUIDTEMPLATE 
	10 {
		file.cObject = CASE
		file.cObject {
			key.data = levelfield:-1, backend_layout_next_level,slide
			key.override.field = backend_layout
			
			default = TEXT
			default.value = fileadmin/templates/Standard.html
			
			1 = TEXT
			1.value = fileadmin/templates/Standard.html
			
			2 = TEXT
			2.value = fileadmin/templates/Privacy.html
		}

		partialRootPath = fileadmin/templates/partials/
		layoutRootPath = fileadmin/templates/layouts/
		
		variables {
			# special
			pageUid < lib.pageUid
			
			# menu
			menuMain < menu.menuMain
			
			# seo
			seoBlock < lib.jdMetaOg
		
			# content - general
			contentBlock < lib.contentBlock

		}
	}
}