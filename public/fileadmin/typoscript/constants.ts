config {
	# cat=config; type=boolean; label=Admin Panel: Turn on admin panel (mainly for testing purposes only)
	adminPanel = 0

	# cat=config; type=boolean; label=Debugging: Turn on debugging (testing purposes only)
	debug = 1

	# cat=config; type=string; label=Domain name for Base URL: (excluding slashes and protocol like http://)
	# domain = 

	# cat=config; type=string; label=Absolute URI prefix: (use "/" if running on top level; use empty value to use relative URI)
	absRefPrefix = /
}

styles.templates {
    templateRootPath = fileadmin/templates/fluid/Resources/Private/Templates/
    partialRootPath = fileadmin/templates/fluid/Resources/Private/Partials/
    layoutRootPath = fileadmin/templates/fluid/Resources/Private/Layouts/
}

styles {
    content {
        textmedia {
            # maximum width of generated images
            maxW = 1600
            # maximum width of generated images (beside text)
            maxWInText = 1000
            # column spacing in pixels for multiple image columns
            columnSpacing = 10
            # row spacing in pixels for multiple image rows
            rowSpacing = 10
            # spacing to the text
            textMargin = 10
        }
    }
}