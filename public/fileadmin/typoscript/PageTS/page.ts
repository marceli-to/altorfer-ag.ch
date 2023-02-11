# Show only the chosen columns in the page module
# 0=normal, 1=left, 2=right, 3=border
mod.SHARED.colPos_list = 0,1,2,3,4,90,91,92,93,94,99

# Set the default label and flag
mod.SHARED.defaultLanguageLabel = German
mod.SHARED.defaultLanguageFlag = de.gif

# Show the content element wizard with tabs (for consistency)
mod.wizards.newContentElement.renderMode = tabs

# TCEFORM
TCEFORM {
    pages {
        layout {
            removeItems = 1,2,3
        }
    }
    tt_content {
        header_layout {
            altLabels {
                1 = H1
                2 = H2
                3 = H3
                4 = H4
                5 = H5
            }
        }
        layout {
            # removeItems = 1,2,3
        }        
        imageborder {
            disabled = 1
        }
        imagecols {
            removeItems = 7,8
        }
        image_zoom {
            types {
                media {
                    disabled = 1
                }
            }
        }
        imageorient {
            removeItems = 1,2,9,10,17,18
            types {
                image {
                    disabled = 1
                }
                media {
                    disabled = 1
                }
            }
        }        
    }
}
       

# If an editor creates a page it should be visible to all editors and admins
TCEMAIN {
    permissions {
        groupid = 1
        user = show, editcontent, edit, new, delete
        group = show, editcontent, edit, new, delete
        everybody =
    }
    translateToHidden = 1
}


# RTE preset
RTE.default.preset = rte_custom

# News template layouts
tx_news.templateLayouts {
	97 = News Listing (Home)
	98 = News Navigation
	99 = News Detail
}