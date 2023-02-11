lib.content < styles.content.get

lib.contentBlock = COA
lib.contentBlock {
	1 < styles.content.get
	1.select.where = colPos=0
	1 {
		wrap = |
	}
}


lib.seoBlock = COA
lib.seoBlock {
	1 < styles.content.get
	1.slide = -1
	1.select.where = colPos=99
	1 {
		wrap = |
	}	
}

# Visual
lib.visualBlock = COA
lib.visualBlock {
	1 < styles.content.get
	1.select.where = colPos=95
	1 {
		wrap = |
	}
}


# Claims (Home)
lib.contentBlockClaimOne = COA
lib.contentBlockClaimOne {
	1 < styles.content.get
	1.select.where = colPos=98
	1 {
		wrap = |
	}
}

lib.contentBlockClaimTwo = COA
lib.contentBlockClaimTwo {
	1 < styles.content.get
	1.select.where = colPos=97
	1 {
		wrap = |
	}
}

lib.contentBlockClaimThree = COA
lib.contentBlockClaimThree {
	1 < styles.content.get
	1.select.where = colPos=96
	1 {
		wrap = |
	}
}

lib.projectImage = COA
lib.projectImage {
	1 < styles.content.get
	1.select.where = colPos=90
	1 {
		wrap = |
	}
}

lib.projectText = COA
lib.projectText {
	1 < styles.content.get
	1.select.where = colPos=91
	1 {
		wrap = |
	}
}


lib.projectIntro = COA
lib.projectIntro {
	1 < styles.content.get
	1.select.where = colPos=0
	1 {
		wrap = |
	}
}

lib.projectTeaser = COA
lib.projectTeaser {
	1 < styles.content.get
	1.select.where = colPos=1
	1 {
		wrap = |
	}
}
