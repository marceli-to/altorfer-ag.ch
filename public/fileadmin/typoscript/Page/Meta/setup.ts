page {

    meta {
        # New notation available since TYPO3 7.4
        # see https://forge.typo3.org/issues/67360 for more details
        viewport = {$page.meta.viewport}
        robots = {$page.meta.robots}
        apple-mobile-web-app-capable = {$page.meta.apple-mobile-web-app-capable}
        description = {$page.meta.description}
        description {
            override.field = description
        }
        author = {$page.meta.author}
        author {
            override.field = author
        }
        keywords = {$page.meta.keywords}
        keywords {
            override.field = keywords
        }
        X-UA-Compatible = {$page.meta.compatible}
        X-UA-Compatible {
            attribute = http-equiv
        }

        # Google
        google = {$page.meta.google}
        google-site-verification = {$page.meta.google-site-verification}

        # OpenGraph Tags
        og:title {
            attribute = property
            field = title
        }
        og:site_name {
            attribute = property
            data = TSFE:tmpl|setup|sitetitle
        }
        og:description = {$page.meta.description}
        og:description {
            attribute = property
            field = description
        }
        og:image {
            attribute = property
            stdWrap.cObject = FILES
            stdWrap.cObject {
                references {
                    data = levelfield:-1, media, slide
                }
                maxItems = 1
                renderObj = COA
                renderObj {
                    10 = IMG_RESOURCE
                    10 {
                        file {
                            import.data = file:current:uid
                            treatIdAsReference = 1
                            width = 1280c
                            height = 720c
                        }
                        stdWrap {
                            typolink {
                                parameter.data = TSFE:lastImgResourceInfo|3
                                returnLast = url
                                forceAbsoluteUrl = 1
                            }
                        }
                    }
                }
            }
        }
    }
}