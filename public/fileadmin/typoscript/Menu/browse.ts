menu.browse = COA
menu.browse {
    20 = HMENU
    20 {
        special = browse
        special {
            items = prev
            value.data = page:uid
        }
        1 = TMENU
        1.noBlur = 1
        1.NO {
            ATagParams = class="icon-browse is-prev"
			stdWrap.cObject = TEXT
			stdWrap.cObject.value = &nbsp;
        }
    }
    10 = HMENU
    10 {
        special = browse
        special {
            items = next
            value.data = TSFE:pid
        }
        1 = TMENU
        1.noBlur = 1
        
        1.NO {
            ATagParams = class="icon-browse is-next"
			stdWrap.cObject = TEXT
			stdWrap.cObject.value = &nbsp;
		}
    }
}