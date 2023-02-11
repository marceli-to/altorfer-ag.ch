menu.menuMain < menu.template
menu.menuMain {
	
	wrap = <ul>|</ul>
	
	1 {
		expAll = 1
		
		NO {
			wrapItemAndSub = <li>|</li>
		}

		ACT < .NO
		ACT {
			ATagParams = class="is-active"
			wrapItemAndSub = <li>|</li>
		}

		CUR < .ACT
		
		IFSUB = 1
		IFSUB.wrapItemAndSub = <li>|</li>
		IFSUB.ATagParams.wrap = class="is-parent"
		
		ACTIFSUB < .IFSUB
	    ACTIFSUB {
			ATagParams.wrap = class="is-active is-parent"
			wrapItemAndSub = <li>|</li>
	    }

		CURIFSUB < .IFSUB
	    CURIFSUB {
			ATagParams.wrap = class="is-active is-parent"
			wrapItemAndSub = <li>|</li>
	    }
	    
		SPC = 1
		SPC {
			doNotLinkIt = 0
			doNotShowLink = 0
			expAll = 1
			wrapItemAndSub = <li class="is-separator">|</li>
			
			after.cObject = HMENU
			after.cObject {
				special = directory
				special.value.field = uid
				1 = TMENU
				1 {
					noBlur = 1
					expAll = 1
					wrap = <ul>|</ul>
					NO.wrapItemAndSub = <li>|</li>
					
					ACT = 1
					ACT.wrapItemAndSub = <li>|</li>
    				ACT.ATagParams.wrap = class="is-active"
				}
			}
		}
	}
	
	2 < .1
	
	2 {
		wrap = <ul>|</ul>

		NO {
			wrapItemAndSub = <li>|</li>
		}

		ACT < .NO
		ACT {
			ATagParams = class="is-active"
			wrapItemAndSub = <li>|</li>
		}

		CUR {
			wrapItemAndSub = <li>|</li>
		}
	}
	3 < .2
}