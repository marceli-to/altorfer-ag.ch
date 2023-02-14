# Get page uid
lib.pageUid = TEXT
lib.pageUid.data = page:uid

# Get page pid
lib.pagePid = TEXT
lib.pagePid.data = page:pid

# Language Key - English
lib.languageKey = TEXT
lib.languageKey.value = de

# Set page title
lib.pageTitle = TEXT
lib.pageTitle {
	field = subtitle // title
	noTrimWrap = |<title>| - Altorfer AG Metallbau – Ihr Spezialist für Metallbau</title>|	
}