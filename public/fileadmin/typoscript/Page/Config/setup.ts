config {
	
	// Administrator settings
	admPanel = {$config.adminPanel}
	debug = 1
	contentObjectExceptionHandler = 0

	doctype = html5
	htmlTag_setParams = none

	// Character sets
	renderCharset = utf-8
	metaCharset = utf-8

	// Cache settings
	cache_period = 86400
	
	no_cache = 0
	
	sendCacheHeaders = 1

	// URL Settings
	tx_realurl_enable = 1
	simulateStaticDocuments = 0

	// Language Settings
	uniqueLinkVars = 1
	linkVars = L(0-2)
	sys_language_uid = 0
	sys_language_overlay = 0
	sys_language_mode = content_fallback
	language = en
	locale_all = en_EN
	htmlTag_langKey = en
	htmlTag_setParams = lang="en"
	
	baseURL =
	
	// Link settings
	absRefPrefix = {$config.absRefPrefix}
	prefixLocalAnchors = all
	
	// Remove targets from links
	intTarget =
	extTarget =

	// Indexed Search
	index_enable = 1
	index_externals = 1

	// Code cleaning
	disablePrefixComment = 1

	// Move default CSS and JS to external file
	removeDefaultJS = external
	removeDefaultCss = external
	inlineStyle2TempFile = 1

	// Protect mail addresses from spamming
	spamProtectEmailAddresses = 0
	spamProtectEmailAddresses_atSubst = @<span style="display:none;">remove-this.</span>

	noPageTitle = 0
	
	frontend_editing = 1

	compressBody = 1		
}

config.htmlTag_stdWrap {
	cObject = TEXT
	cObject.value (
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html class="no-js" lang="en">
	)
}