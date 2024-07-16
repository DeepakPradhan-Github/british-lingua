<?php include "breadcrumb.php"; ?>



<!------- body section Start ------>
<section>



    <style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <style id='wp-block-library-inline-css'>
    :root {
        --wp-admin-theme-color: #007cba;
        --wp-admin-theme-color--rgb: 0, 124, 186;
        --wp-admin-theme-color-darker-10: #006ba1;
        --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
        --wp-admin-theme-color-darker-20: #005a87;
        --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
        --wp-admin-border-width-focus: 2px
    }

    @media (-webkit-min-device-pixel-ratio:2),
    (min-resolution:192dpi) {
        :root {
            --wp-admin-border-width-focus: 1.5px
        }
    }

    .wp-element-button {
        cursor: pointer
    }

    :root {
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 42px
    }

    :root .has-very-light-gray-background-color {
        background-color: #eee
    }

    :root .has-very-dark-gray-background-color {
        background-color: #313131
    }

    :root .has-very-light-gray-color {
        color: #eee
    }

    :root .has-very-dark-gray-color {
        color: #313131
    }

    :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
        background: linear-gradient(135deg, #00d084, #0693e3)
    }

    :root .has-purple-crush-gradient-background {
        background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
    }

    :root .has-hazy-dawn-gradient-background {
        background: linear-gradient(135deg, #faaca8, #dad0ec)
    }

    :root .has-subdued-olive-gradient-background {
        background: linear-gradient(135deg, #fafae1, #67a671)
    }

    :root .has-atomic-cream-gradient-background {
        background: linear-gradient(135deg, #fdd79a, #004a59)
    }

    :root .has-nightshade-gradient-background {
        background: linear-gradient(135deg, #330968, #31cdcf)
    }

    :root .has-midnight-gradient-background {
        background: linear-gradient(135deg, #020381, #2874fc)
    }

    .has-regular-font-size {
        font-size: 1em
    }

    .has-larger-font-size {
        font-size: 2.625em
    }

    .has-normal-font-size {
        font-size: var(--wp--preset--font-size--normal)
    }

    .has-huge-font-size {
        font-size: var(--wp--preset--font-size--huge)
    }

    .has-text-align-center {
        text-align: center
    }

    .has-text-align-left {
        text-align: left
    }

    .has-text-align-right {
        text-align: right
    }

    #end-resizable-editor-section {
        display: none
    }

    .aligncenter {
        clear: both
    }

    .items-justified-left {
        justify-content: flex-start
    }

    .items-justified-center {
        justify-content: center
    }

    .items-justified-right {
        justify-content: flex-end
    }

    .items-justified-space-between {
        justify-content: space-between
    }

    .screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        word-wrap: normal !important
    }

    .screen-reader-text:focus {
        background-color: #ddd;
        clip: auto !important;
        clip-path: none;
        color: #444;
        display: block;
        font-size: 1em;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000
    }

    html :where(.has-border-color) {
        border-style: solid
    }

    html :where([style*=border-top-color]) {
        border-top-style: solid
    }

    html :where([style*=border-right-color]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-color]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-color]) {
        border-left-style: solid
    }

    html :where([style*=border-width]) {
        border-style: solid
    }

    html :where([style*=border-top-width]) {
        border-top-style: solid
    }

    html :where([style*=border-right-width]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-width]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-width]) {
        border-left-style: solid
    }

    html :where(img[class*=wp-image-]) {
        height: auto;
        max-width: 100%
    }

    figure {
        margin: 0 0 1em
    }
    </style>
    <style id='global-styles-inline-css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--base: #ffffff;
        --wp--preset--color--contrast: #000000;
        --wp--preset--color--primary: #9DFF20;
        --wp--preset--color--secondary: #345C00;
        --wp--preset--color--tertiary: #F6F6F6;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: clamp(0.875rem, 0.875rem + ((1vw - 0.48rem) * 0.24), 1rem);
        --wp--preset--font-size--medium: clamp(1rem, 1rem + ((1vw - 0.48rem) * 0.24), 1.125rem);
        --wp--preset--font-size--large: clamp(1.75rem, 1.75rem + ((1vw - 0.48rem) * 0.24), 1.875rem);
        --wp--preset--font-size--x-large: 2.25rem;
        --wp--preset--font-size--xx-large: clamp(4rem, 4rem + ((1vw - 0.48rem) * 11.538), 10rem);
        --wp--preset--font-family--dm-sans: "DM Sans", sans-serif;
        --wp--preset--font-family--ibm-plex-mono: 'IBM Plex Mono', monospace;
        --wp--preset--font-family--inter: "Inter", sans-serif;
        --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
        --wp--preset--spacing--30: clamp(1.5rem, 5vw, 2rem);
        --wp--preset--spacing--40: clamp(1.8rem, 1.8rem + ((1vw - 0.48rem) * 2.885), 3rem);
        --wp--preset--spacing--50: clamp(2.5rem, 8vw, 4.5rem);
        --wp--preset--spacing--60: clamp(3.75rem, 10vw, 7rem);
        --wp--preset--spacing--70: clamp(5rem, 5.25rem + ((1vw - 0.48rem) * 9.096), 8rem);
        --wp--preset--spacing--80: clamp(7rem, 14vw, 11rem);
    }

    body {
        margin: 0;
        --wp--style--global--content-size: 650px;
        --wp--style--global--wide-size: 1200px;
    }

    .wp-site-blocks {
        padding-top: var(--wp--style--root--padding-top);
        padding-bottom: var(--wp--style--root--padding-bottom);
    }

    .has-global-padding {
        padding-right: var(--wp--style--root--padding-right);
        padding-left: var(--wp--style--root--padding-left);
    }

    .has-global-padding :where(.has-global-padding) {
        padding-right: 0;
        padding-left: 0;
    }

    .has-global-padding>.alignfull {
        margin-right: calc(var(--wp--style--root--padding-right) * -1);
        margin-left: calc(var(--wp--style--root--padding-left) * -1);
    }

    .has-global-padding :where(.has-global-padding)>.alignfull {
        margin-right: 0;
        margin-left: 0;
    }

    .has-global-padding>.alignfull:where(:not(.has-global-padding))> :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]), p, h1, h2, h3, h4, h5, h6, ul, ol) {
        padding-right: var(--wp--style--root--padding-right);
        padding-left: var(--wp--style--root--padding-left);
    }

    .has-global-padding :where(.has-global-padding)>.alignfull:where(:not(.has-global-padding))> :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]), p, h1, h2, h3, h4, h5, h6, ul, ol) {
        padding-right: 0;
        padding-left: 0;
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    .wp-site-blocks>* {
        margin-block-start: 0;
        margin-block-end: 0;
    }

    .wp-site-blocks>*+* {
        margin-block-start: 1.5rem;
    }

    body {
        --wp--style--block-gap: 1.5rem;
    }

    body .is-layout-flow>* {
        margin-block-start: 0;
        margin-block-end: 0;
    }

    body .is-layout-flow>*+* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    body .is-layout-constrained>* {
        margin-block-start: 0;
        margin-block-end: 0;
    }

    body .is-layout-constrained>*+* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    body .is-layout-flex {
        gap: 1.5rem;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body {
        background-color: var(--wp--preset--color--base);
        color: var(--wp--preset--color--contrast);
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        line-height: 1.6;
        --wp--style--root--padding-top: var(--wp--preset--spacing--40);
        --wp--style--root--padding-right: var(--wp--preset--spacing--30);
        --wp--style--root--padding-bottom: var(--wp--preset--spacing--40);
        --wp--style--root--padding-left: var(--wp--preset--spacing--30);
    }

    a:where(:not(.wp-element-button)) {
        color: var(--wp--preset--color--contrast);
        /*text-decoration: underline;*/
    }

    a:where(:not(.wp-element-button)):hover {
        text-decoration: none;
    }

    a:where(:not(.wp-element-button)):focus {
        /*text-decoration: underline dashed;*/
    }

    a:where(:not(.wp-element-button)):active {
        color: var(--wp--preset--color--secondary);
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 400;
        line-height: 1.4;
    }

    h1 {
        font-size: clamp(2.719rem, 2.719rem + ((1vw - 0.48rem) * 1.742), 3.625rem);
        line-height: 1.2;
    }

    h2 {
        font-size: clamp(2.625rem, calc(2.625rem + ((1vw - 0.48rem) * 8.4135)), 3.25rem);
        line-height: 1.2;
    }

    h3 {
        font-size: var(--wp--preset--font-size--x-large);
    }

    h4 {
        font-size: var(--wp--preset--font-size--large);
    }

    h5 {
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 700;
        text-transform: uppercase;
    }

    h6 {
        font-size: var(--wp--preset--font-size--medium);
        text-transform: uppercase;
    }

    .wp-element-button,
    .wp-block-button__link {
        background-color: var(--wp--preset--color--primary);
        border-radius: 0;
        border-width: 0;
        color: var(--wp--preset--color--contrast);
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        text-decoration: none;
    }

    .wp-element-button:visited,
    .wp-block-button__link:visited {
        color: var(--wp--preset--color--contrast);
    }

    .wp-element-button:hover,
    .wp-block-button__link:hover {
        background-color: var(--wp--preset--color--contrast);
        color: var(--wp--preset--color--base);
    }

    .wp-element-button:focus,
    .wp-block-button__link:focus {
        background-color: var(--wp--preset--color--contrast);
        color: var(--wp--preset--color--base);
    }

    .wp-element-button:active,
    .wp-block-button__link:active {
        background-color: var(--wp--preset--color--secondary);
        color: var(--wp--preset--color--base);
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-base-color {
        color: var(--wp--preset--color--base) !important;
    }

    .has-contrast-color {
        color: var(--wp--preset--color--contrast) !important;
    }

    .has-primary-color {
        color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-color {
        color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-color {
        color: var(--wp--preset--color--tertiary) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-base-background-color {
        background-color: var(--wp--preset--color--base) !important;
    }

    .has-contrast-background-color {
        background-color: var(--wp--preset--color--contrast) !important;
    }

    .has-primary-background-color {
        background-color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-background-color {
        background-color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-background-color {
        background-color: var(--wp--preset--color--tertiary) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-base-border-color {
        border-color: var(--wp--preset--color--base) !important;
    }

    .has-contrast-border-color {
        border-color: var(--wp--preset--color--contrast) !important;
    }

    .has-primary-border-color {
        border-color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-border-color {
        border-color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-border-color {
        border-color: var(--wp--preset--color--tertiary) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .has-xx-large-font-size {
        font-size: var(--wp--preset--font-size--xx-large) !important;
    }

    .has-dm-sans-font-family {
        font-family: var(--wp--preset--font-family--dm-sans) !important;
    }

    .has-ibm-plex-mono-font-family {
        font-family: var(--wp--preset--font-family--ibm-plex-mono) !important;
    }

    .has-inter-font-family {
        font-family: var(--wp--preset--font-family--inter) !important;
    }

    .has-system-font-font-family {
        font-family: var(--wp--preset--font-family--system-font) !important;
    }

    .has-source-serif-pro-font-family {
        font-family: var(--wp--preset--font-family--source-serif-pro) !important;
    }
    </style>
    <style id='wp-webfonts-inline-css'>
    @font-face {
        font-family: "DM Sans";
        font-style: normal;
        font-weight: 400;
        font-display: fallback;
        src: local("DM Sans"), url('/wp-content/themes/twentytwentythree/assets/fonts/dm-sans/DMSans-Regular.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "DM Sans";
        font-style: italic;
        font-weight: 400;
        font-display: fallback;
        src: local("DM Sans"), url('/wp-content/themes/twentytwentythree/assets/fonts/dm-sans/DMSans-Regular-Italic.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "DM Sans";
        font-style: normal;
        font-weight: 700;
        font-display: fallback;
        src: local("DM Sans"), url('/wp-content/themes/twentytwentythree/assets/fonts/dm-sans/DMSans-Bold.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "DM Sans";
        font-style: italic;
        font-weight: 700;
        font-display: fallback;
        src: local("DM Sans"), url('/wp-content/themes/twentytwentythree/assets/fonts/dm-sans/DMSans-Bold-Italic.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "IBM Plex Mono";
        font-style: normal;
        font-weight: 300;
        font-display: block;
        src: local("IBM Plex Mono"), url('/wp-content/themes/twentytwentythree/assets/fonts/ibm-plex-mono/IBMPlexMono-Light.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "IBM Plex Mono";
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: local("IBM Plex Mono"), url('/wp-content/themes/twentytwentythree/assets/fonts/ibm-plex-mono/IBMPlexMono-Regular.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "IBM Plex Mono";
        font-style: italic;
        font-weight: 400;
        font-display: block;
        src: local("IBM Plex Mono"), url('/wp-content/themes/twentytwentythree/assets/fonts/ibm-plex-mono/IBMPlexMono-Italic.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "IBM Plex Mono";
        font-style: normal;
        font-weight: 700;
        font-display: block;
        src: local("IBM Plex Mono"), url('/wp-content/themes/twentytwentythree/assets/fonts/ibm-plex-mono/IBMPlexMono-Bold.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: Inter;
        font-style: normal;
        font-weight: 200 900;
        font-display: fallback;
        src: local(Inter), url('/wp-content/themes/twentytwentythree/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf') format('truetype');
        font-stretch: normal;
    }

    @font-face {
        font-family: "Source Serif Pro";
        font-style: normal;
        font-weight: 200 900;
        font-display: fallback;
        src: local("Source Serif Pro"), url('/wp-content/themes/twentytwentythree/assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "Source Serif Pro";
        font-style: italic;
        font-weight: 200 900;
        font-display: fallback;
        src: local("Source Serif Pro"), url('/wp-content/themes/twentytwentythree/assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2') format('woff2');
        font-stretch: normal;
    }
    </style>
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/css/webinar/webi1.css'; ?>">
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/css/webinar/webi2.css'; ?>">
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/css/webinar/webi3.css'; ?>">
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/css/webinar/webi4.css'; ?>">
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/css/webinar/webi5.css'; ?>">
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/css/webinar/webi6.css'; ?>">

    <!-- <link rel='stylesheet' id='elementor-icons-css'
        href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.18.0'
        media='all' /> -->
    <!-- <link rel='stylesheet' id='elementor-frontend-css'
        href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.11.3'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-post-6-css'
        href='https://trainersgrowthsummit.sgacademy.info/wp-content/uploads/elementor/css/post-6.css?ver=1678415481'
        media='all' />
    <link rel='stylesheet' id='powerpack-frontend-css'
        href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/powerpack-elements/assets/css/min/frontend.min.css?ver=2.8.3'
        media='all' /> -->
    <!-- <link rel='stylesheet' id='wpforms-full-css' href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/wpforms-lite/assets/css/wpforms-full.min.css?ver=1.8.0.2' media='all' /> -->
    <!-- <link rel='stylesheet' id='elementor-pro-css' href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.13.2' media='all' /> -->
    <!-- <link rel='stylesheet' id='elementor-global-css' href='https://trainersgrowthsummit.sgacademy.info/wp-content/uploads/elementor/css/global.css?ver=1678415483' media='all' /> -->
    <!-- <link rel='stylesheet' id='elementor-post-328-css'
        href='https://trainersgrowthsummit.sgacademy.info/wp-content/uploads/elementor/css/post-328.css?ver=1719051522'
        media='all' /> -->
    <!-- <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.1.1' media='all' /> -->
    <!-- <link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' /> -->
    <!-- <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' /> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><link rel="https://api.w.org/" href="https://trainersgrowthsummit.sgacademy.info/wp-json/" /><link rel="alternate" type="application/json" href="https://trainersgrowthsummit.sgacademy.info/wp-json/wp/v2/pages/328" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://trainersgrowthsummit.sgacademy.info/xmlrpc.php?rsd" /> -->
    <!-- <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://trainersgrowthsummit.sgacademy.info/wp-includes/wlwmanifest.xml" /> -->
    <!-- <meta name="generator" content="WordPress 6.1.1" /> -->
    <!-- <link rel="canonical" href="https://trainersgrowthsummit.sgacademy.info/join-workshop-now/" /> -->
    <!-- <link rel='shortlink' href='https://trainersgrowthsummit.sgacademy.info/?p=328' /> -->
    <!-- <link rel="alternate" type="application/json+oembed" href="https://trainersgrowthsummit.sgacademy.info/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftrainersgrowthsummit.sgacademy.info%2Fjoin-workshop-now%2F" /> -->
    <!-- <link rel="alternate" type="text/xml+oembed" href="https://trainersgrowthsummit.sgacademy.info/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftrainersgrowthsummit.sgacademy.info%2Fjoin-workshop-now%2F&#038;format=xml" /> -->
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11126941078"></script> -->
    
    <!-- Event snippet for TGS Page View conversion page -->

    <style>
    .no-js img.lazyload {
        display: none;
    }

    figure.wp-block-image img.lazyloading {
        min-width: 150px;
    }

    .lazyload,
    .lazyloading {
        opacity: 0;
    }

    .lazyloaded {
        opacity: 1;
        transition: opacity 400ms;
        transition-delay: 0ms;
    }
    </style>
    <!-- <meta name="generator" content="Elementor 3.11.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" /></head> -->

    <!-- <body class="page-template page-template-elementor_canvas page page-id-328 wp-embed-responsive elementor-default elementor-template-canvas elementor-kit-6 elementor-page elementor-page-328"> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 0.49803921568627" />
                        <feFuncG type="table" tableValues="0 0.49803921568627" />
                        <feFuncB type="table" tableValues="0 0.49803921568627" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 0.27843137254902" />
                        <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-midnight">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 0" />
                        <feFuncG type="table" tableValues="0 0.64705882352941" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.78039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.94901960784314" />
                        <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.098039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.66274509803922" />
                        <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg>
        <div data-elementor-type="wp-page" data-elementor-id="328" class="elementor elementor-328">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b566e7d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="b566e7d" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9fa4c99"
                        data-id="9fa4c99" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            
                            
                            <div class="elementor-element elementor-element-4edbb84 elementor-widget elementor-widget-heading"
                                data-id="4edbb84" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default" style="margin:60px 0">Mastering English Communication Skills with British Lingua</h2>
                                </div>
                            </div>
                            
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-a355b3c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="a355b3c" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-23f0d91"
                                        data-id="23f0d91" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-896e061 elementor-widget elementor-widget-image"
                                                data-id="896e061" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                    /*! elementor - v3.11.3 - 07-03-2023 */
                                                    .elementor-widget-image {
                                                        text-align: center
                                                    }

                                                    .elementor-widget-image a {
                                                        display: inline-block
                                                    }

                                                    .elementor-widget-image a img[src$=".svg"] {
                                                        width: 48px
                                                    }

                                                    .elementor-widget-image img {
                                                        vertical-align: middle;
                                                        display: inline-block
                                                    }
                                                    </style> 
                                                    
                                                    <img decoding="async" width="994" height="994" alt=""
                                                        
                                                       
                                                        data-sizes="(max-width: 994px) 100vw, 994px"
                                                        class="attachment-large size-large wp-image-1158 lazyload"
                                                        src="<?php echo base_url('assets/frontend/default-new/image/kapilDev.png')?>" />
                                                        <noscript><img
                                                            decoding="async" width="994" height="994"
                                                            src="<?php echo base_url('assets/frontend/default-new/image/kapilDev.png')?>"
                                                            class="attachment-large size-large wp-image-1158" alt=""
                                                           
                                                            sizes="(max-width: 994px) 100vw, 994px" /></noscript>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-51ef87f elementor-widget elementor-widget-heading"
                                                data-id="51ef87f" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">English Mastery Webinar</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c3b0d03 elementor-widget elementor-widget-heading"
                                                data-id="c3b0d03" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Your Personalized Learning Experience</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0b3a033"
                                        data-id="0b3a033" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-08cd878 elementor-absolute elementor-widget elementor-widget-heading"
                                                data-id="08cd878" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Why  attend this webinar?</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3fdb4a7 listTopPoints elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="3fdb4a7" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <link rel="stylesheet"
                                                        href="https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                    <ul class="elementor-icon-list-items">
                                                        
                                                        <li class="elementor-icon-list-item">
                                                            
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                                
                                                            <span class="elementor-icon-list-text"><b>Expert Guidance:</b> Benefit from the insights of our experienced trainers who have a proven track record of success.</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"><b>Comprehensive Learning:</b> Discover the unique methodologies that have made British Lingua a trusted name in English training.</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"><b>Network with Peers:</b>Connect with like-minded individuals who are also on their journey to mastering English.</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"><b>Empowerment Through Education:</b> Learn how proficiency in English can open doors to new opportunities and empower you in your personal and professional life.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-dfdb9fd elementor-align-justify elementor-widget elementor-widget-button"
                                                data-id="dfdb9fd" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                    <form action="<?php echo site_url('home/webinar_payment'); ?>" method="post">
                                                        <a href="javascript:void(0);" onclick="this.closest('form').submit();"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <?php //foreach ($top_courses as $course): ?>
                                                                <span class="elementor-button-text">JOIN NOW FOR
                                                                    ₹199<?= $course['price']; ?></span>
                                                                    <?php //endforeach; ?>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-51d0776 elementor-widget elementor-widget-heading"
                                                data-id="51d0776" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        Enrollment closes on <b class="date-des">today</b> <br>
                                                        WEBINAR STARTS ON 30th June 2024 </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f2e992f elementor-widget elementor-widget-heading"
                                                data-id="f2e992f" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Language
                                                        - Basic English</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section hidden
                                class="elementor-section elementor-inner-section elementor-element elementor-element-02dee74 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="02dee74" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-622b572"
                                        data-id="622b572" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5994e27 elementor-widget elementor-widget-heading"
                                                data-id="5994e27" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Register
                                                        In Next 15:00 Mins</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4ee5376 boxTimer elementor-countdown--label-block elementor-widget elementor-widget-countdown"
                                                data-id="4ee5376" data-element_type="widget"
                                                data-widget_type="countdown.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                    /*! elementor-pro - v3.13.2 - 22-05-2023 */
                                                    .elementor-widget-countdown .elementor-countdown-expire--message {
                                                        display: none;
                                                        padding: 20px;
                                                        text-align: center
                                                    }

                                                    .elementor-widget-countdown .elementor-countdown-wrapper {
                                                        flex-direction: row
                                                    }

                                                    .elementor-widget-countdown .elementor-countdown-item {
                                                        padding: 20px 0;
                                                        text-align: center;
                                                        color: #fff
                                                    }

                                                    .elementor-widget-countdown .elementor-countdown-digits,
                                                    .elementor-widget-countdown .elementor-countdown-label {
                                                        line-height: 1
                                                    }

                                                    .elementor-widget-countdown .elementor-countdown-digits {
                                                        font-size: 69px
                                                    }

                                                    .elementor-widget-countdown .elementor-countdown-label {
                                                        font-size: 19px
                                                    }

                                                    .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-wrapper {
                                                        display: flex;
                                                        justify-content: center;
                                                        margin-right: auto;
                                                        margin-left: auto
                                                    }

                                                    .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-digits,
                                                    .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-label {
                                                        display: block
                                                    }

                                                    .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-item {
                                                        flex-basis: 0;
                                                        flex-grow: 1
                                                    }

                                                    .elementor-widget-countdown.elementor-countdown--label-inline {
                                                        text-align: center
                                                    }

                                                    .elementor-widget-countdown.elementor-countdown--label-inline .elementor-countdown-item {
                                                        display: inline-block;
                                                        padding-left: 5px;
                                                        padding-right: 5px
                                                    }
                                                    </style>
                                                    <div data-evergreen-interval="900"
                                                        class="elementor-countdown-wrapper" data-date="">
                                                        <div class="elementor-countdown-item"><span
                                                                class="elementor-countdown-digits elementor-countdown-minutes"></span>
                                                            <span class="elementor-countdown-label">Minutes</span></div>
                                                        <div class="elementor-countdown-item"><span
                                                                class="elementor-countdown-digits elementor-countdown-seconds"></span>
                                                            <span class="elementor-countdown-label">Seconds</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-75661bd elementor-widget elementor-widget-heading"
                                                data-id="75661bd" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">to unlock the door to endless opportunities and personal growth through exceptional English communication skills.</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            
           
           
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-08dd804 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="08dd804" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c66dc64"
                        data-id="c66dc64" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-eb9f384 elementor-widget elementor-widget-heading"
                                data-id="eb9f384" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">What will
                                        <span style="color:#E93336F;"> you learn </span>in the Webinar?
                                    </h2>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-8beea34 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="8beea34" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-02bbaac"
                                        data-id="02bbaac" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ee70bac elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="ee70bac" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ced3524 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="ced3524" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-888a6b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="888a6b5" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7371366"
                                        data-id="7371366" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7d6c0f0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="7d6c0f0" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Effective Communication: Techniques to improve your spoken and written English.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c1abe19"
                                        data-id="c1abe19" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e43d8cb elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="e43d8cb" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Grammar Essentials: Key grammar rules for clear communication.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-591d9af elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="591d9af" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0f3ad16"
                                        data-id="0f3ad16" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-eacee57 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="eacee57" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Vocabulary Building: Strategies to expand your English vocabulary.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5d12b17"
                                        data-id="5d12b17" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5fc217d elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="5fc217d" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Pronunciation Tips: Methods to enhance your pronunciation and fluency.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9c41fd3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9c41fd3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8dd3349"
                                        data-id="8dd3349" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-356a504 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="356a504" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Confidence Boosting: Ways to increase your confidence in using English.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-263a7d3"
                                        data-id="263a7d3" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5aa50a9 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="5aa50a9" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M13 2.16669C7.03082 2.16669 2.16666 7.03085 2.16666 13C2.16666 18.9692 7.03082 23.8334 13 23.8334C18.9692 23.8334 23.8333 18.9692 23.8333 13C23.8333 7.03085 18.9692 2.16669 13 2.16669ZM18.1783 10.5084L12.0358 16.6509C11.8835 16.803 11.677 16.8885 11.4617 16.8885C11.2463 16.8885 11.0398 16.803 10.8875 16.6509L7.82166 13.585C7.67055 13.4321 7.58581 13.2258 7.58581 13.0109C7.58581 12.7959 7.67055 12.5896 7.82166 12.4367C8.13582 12.1225 8.65582 12.1225 8.96999 12.4367L11.4617 14.9284L17.03 9.36002C17.3442 9.04585 17.8642 9.04585 18.1783 9.36002C18.4925 9.67419 18.4925 10.1834 18.1783 10.5084Z"
                                                                        fill="#E93336F"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Practical Applications: Real-life scenarios to practice and apply your English skills.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
           
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-12e2c13 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="12e2c13" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33956ad"
                        data-id="33956ad" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ec0e6d9 elementor-widget elementor-widget-heading"
                                data-id="ec0e6d9" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Who Will Benefit Most from This workshop?
                                    </h2>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-1659899 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="1659899" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e562163"
                                        data-id="e562163" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a38b88a elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="a38b88a" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-932d5da elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="932d5da" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-9c6f775 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="9c6f775" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_25_45)">
                                                        <path
                                                            d="M11.0001 0C4.9346 0 0 4.93453 0 10.9999C0 17.0653 4.9346 21.9999 11.0001 21.9999C17.0655 21.9999 22 17.0653 22 10.9999C22 4.93453 17.0655 0 11.0001 0ZM11.0001 20.1966C5.92893 20.1966 1.80327 16.0711 1.80327 10.9999C1.80327 5.92885 5.92893 1.80327 11.0001 1.80327C16.0711 1.80327 20.1967 5.92885 20.1967 10.9999C20.1967 16.0711 16.0711 20.1966 11.0001 20.1966Z"
                                                            fill="#E93336F"></path>
                                                        <path
                                                            d="M15.7586 6.77796L9.22745 13.3092L6.24139 10.3231C5.88925 9.97104 5.3184 9.97104 4.96626 10.3231C4.61419 10.6753 4.61419 11.2461 4.96626 11.5982L8.58989 15.2219C8.76596 15.3979 8.99671 15.4859 9.22745 15.4859C9.4582 15.4859 9.68895 15.3979 9.86502 15.2219L17.0337 8.05316C17.3858 7.70102 17.3858 7.13017 17.0337 6.77803C16.6816 6.42589 16.1107 6.42589 15.7586 6.77796Z"
                                                            fill="#E93336F"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_25_45">
                                                            <rect width="22" height="22" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg> </span>
                                            <span class="elementor-icon-list-text">
                                            <ul>
                                                <li><strong>Students:</strong> Enhancing academic performance and preparing for future careers.</li> <br>
                                                <li><strong>Professionals:</strong> Improving workplace communication and career advancement.</li><br>
                                                <li><strong>Job Seekers:</strong> Boosting employability and interview skills.</li><br>
                                                <li><strong>Entrepreneurs:</strong> Expanding business opportunities and networking capabilities.</li><br>
                                                <li><strong>Non-native English Speakers:</strong> Achieving fluency and confidence in English.</li><br>
                                                <li><strong>Public Speakers:</strong> Refining presentation and public speaking skills.</li><br>
                                            </ul>

                                            </span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_25_45)">
                                                        <path
                                                            d="M11.0001 0C4.9346 0 0 4.93453 0 10.9999C0 17.0653 4.9346 21.9999 11.0001 21.9999C17.0655 21.9999 22 17.0653 22 10.9999C22 4.93453 17.0655 0 11.0001 0ZM11.0001 20.1966C5.92893 20.1966 1.80327 16.0711 1.80327 10.9999C1.80327 5.92885 5.92893 1.80327 11.0001 1.80327C16.0711 1.80327 20.1967 5.92885 20.1967 10.9999C20.1967 16.0711 16.0711 20.1966 11.0001 20.1966Z"
                                                            fill="#E93336F"></path>
                                                        <path
                                                            d="M15.7586 6.77796L9.22745 13.3092L6.24139 10.3231C5.88925 9.97104 5.3184 9.97104 4.96626 10.3231C4.61419 10.6753 4.61419 11.2461 4.96626 11.5982L8.58989 15.2219C8.76596 15.3979 8.99671 15.4859 9.22745 15.4859C9.4582 15.4859 9.68895 15.3979 9.86502 15.2219L17.0337 8.05316C17.3858 7.70102 17.3858 7.13017 17.0337 6.77803C16.6816 6.42589 16.1107 6.42589 15.7586 6.77796Z"
                                                            fill="#E93336F"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_25_45">
                                                            <rect width="22" height="22" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg> </span>
                                            <span class="elementor-icon-list-text"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-0d58fef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="0d58fef" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cac72f"
                        data-id="7cac72f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3edbb49 elementor-widget elementor-widget-heading"
                                data-id="3edbb49" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">What will change in your life?</h2>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-bd5711f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="bd5711f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-90cf522"
                                        data-id="90cf522" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-887e734 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="887e734" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-35fc765 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="35fc765" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- <div class="elementor-element elementor-element-0d0d5f6 elementor-widget elementor-widget-heading"
                                data-id="0d0d5f6" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">if you register before
                                        the timer hits 0</h2>
                                </div>
                            </div> -->
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9dc6114 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9dc6114" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dbe63e9"
                                        data-id="dbe63e9" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f1ace96 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-heading"
                                                data-id="f1ace96" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">01</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-70a4fab elementor-widget elementor-widget-heading"
                                                data-id="70a4fab" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Enhanced Career Opportunities: Access to better job prospects and career advancements.</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-33b0416 elementor-widget elementor-widget-heading"
                                                data-id="33b0416" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <!-- <h2 class="elementor-heading-title elementor-size-default">₹1299
                                                    </h2> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-86f8ad8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="86f8ad8" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ccc91cf"
                                        data-id="ccc91cf" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6a373e4 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-heading"
                                                data-id="6a373e4" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">02</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3b77a33 elementor-widget elementor-widget-heading"
                                                data-id="3b77a33" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Increased Confidence: Greater self-assurance in both personal and professional environments.</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-44404c2 elementor-widget elementor-widget-heading"
                                                data-id="44404c2" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <!-- <h2 class="elementor-heading-title elementor-size-default">₹1799
                                                    </h2> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-043b94f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="043b94f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ab270fd"
                                        data-id="ab270fd" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3c7cbf2 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-heading"
                                                data-id="3c7cbf2" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">03</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d545fc8 elementor-widget elementor-widget-heading"
                                                data-id="d545fc8" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Non-native English Speakers: Achieving fluency and confidence in English.</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f8177e2 elementor-widget elementor-widget-heading"
                                                data-id="f8177e2" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <!-- <h2 class="elementor-heading-title elementor-size-default">₹1999
                                                    </h2> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="elementor-element elementor-element-cbd71cc elementor-align-justify elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                                data-id="cbd71cc" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="<?php echo site_url('sign_up') ?>"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Register Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                </div>
            </section>
           
            <!-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b681d98 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="b681d98" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-71f3579"
                        data-id="71f3579" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-74e01f6 elementor-widget elementor-widget-heading"
                                data-id="74e01f6" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Here’s a <span
                                            style="color:#E93336F;"> Recap </span> of What You Get</h2>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-3f99987 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="3f99987" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-da61992"
                                        data-id="da61992" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c031ce4 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="c031ce4" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-dcf0b98 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="dcf0b98" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-739d54d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="739d54d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ff85a0a"
                                        data-id="ff85a0a" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b195627 elementor-widget elementor-widget-heading"
                                                data-id="b195627" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">3 Hours
                                                        of <br>
                                                        Training Worth</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7aa53c6 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="7aa53c6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">₹9999
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8f68308"
                                        data-id="8f68308" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3dadeb9 elementor-widget elementor-widget-heading"
                                                data-id="3dadeb9" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">3
                                                        Bonuses<br />
                                                        Worth</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-de4e34d elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="de4e34d" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">₹5097
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-97b3e0e"
                                        data-id="97b3e0e" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-03b6ce9 elementor-widget elementor-widget-heading"
                                                data-id="03b6ce9" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Regular
                                                        <br />
                                                        Price</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-83d6922 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="83d6922" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">₹1999
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-99ceac3"
                                        data-id="99ceac3" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f4deedd elementor-widget elementor-widget-heading"
                                                data-id="f4deedd" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Today’s
                                                        <br />
                                                        Price</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5f7a926 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="5f7a926" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">₹99</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-cbd71cc elementor-align-justify elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                                data-id="cbd71cc" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="https://info172.mojo.page/trainer-growth-webinar-sxga"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Register Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            
            
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-8aaa08a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="8aaa08a" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d3395c"
                        data-id="5d3395c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5ec12d1 elementor-widget elementor-widget-heading"
                                data-id="5ec12d1" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Frequently Asked <span
                                            style="color:#E93336F;"> Questions</span> </h2>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-88af8d1 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="88af8d1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6209916"
                                        data-id="6209916" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f1f3f83 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="f1f3f83" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c1d17ae elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="c1d17ae" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-a011cef elementor-widget elementor-widget-pp-faq"
                                data-id="a011cef" data-element_type="widget"
                                data-settings="{&quot;faq_layout&quot;:&quot;accordion&quot;,&quot;accordion_type&quot;:&quot;accordion&quot;,&quot;toggle_speed&quot;:300}"
                                data-widget_type="pp-faq.default">
                                <div class="elementor-widget-container">
                                    <div class="pp-faqs pp-advanced-accordion pp-toggle-icon-align-right"
                                        id="pp-advanced-accordion-a011cef" data-accordion-id="a011cef">
                                        <div class="pp-faq-item-wrap elementor-grid-item">
                                            <div class="pp-faq-item pp-accordion-item pp-accordion-item-active">
                                                <div id="pp-accordion-tab-title-1671"
                                                    class="pp-faq-question pp-accordion-tab-title pp-accordion-tab-active-default"
                                                    tabindex="1671" data-tab="1" role="tab"
                                                    aria-controls="pp-accordion-tab-content-1671" aria-expanded="true">
                                                    <div class="pp-accordion-title-icon">
                                                        <div class="pp-accordion-title-text">
                                                        What is the duration of the webinar? </div>
                                                    </div>
                                                    <div class="pp-accordion-toggle-icon">
                                                        <span class='pp-accordion-toggle-icon-close pp-icon'>
                                                            <i aria-hidden="true"
                                                                class="fas fa-chevron-circle-down"></i> </span>
                                                        <span class='pp-accordion-toggle-icon-open pp-icon'>
                                                            <i aria-hidden="true" class="fas fa-chevron-circle-up"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div id="pp-accordion-tab-content-1671"
                                                    class="pp-faq-answer pp-accordion-tab-content pp-accordion-tab-active-default"
                                                    data-tab="1" role="tabpanel"
                                                    aria-labelledby="pp-accordion-tab-title-1671">
                                                    <p>The webinar will last for approximately 1.5 hours.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pp-faq-item-wrap elementor-grid-item">
                                            <div class="pp-faq-item pp-accordion-item">
                                                <div id="pp-accordion-tab-title-1672"
                                                    class="pp-faq-question pp-accordion-tab-title" tabindex="1672"
                                                    data-tab="2" role="tab"
                                                    aria-controls="pp-accordion-tab-content-1672" aria-expanded="false">
                                                    <div class="pp-accordion-title-icon">
                                                        <div class="pp-accordion-title-text">
                                                        How can I join the webinar?</div>
                                                    </div>
                                                    <div class="pp-accordion-toggle-icon">
                                                        <span class='pp-accordion-toggle-icon-close pp-icon'>
                                                            <i aria-hidden="true"
                                                                class="fas fa-chevron-circle-down"></i> </span>
                                                        <span class='pp-accordion-toggle-icon-open pp-icon'>
                                                            <i aria-hidden="true" class="fas fa-chevron-circle-up"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div id="pp-accordion-tab-content-1672"
                                                    class="pp-faq-answer pp-accordion-tab-content" data-tab="2"
                                                    role="tabpanel" aria-labelledby="pp-accordion-tab-title-1672">
                                                    <p>After registration, you will receive a link via email to join the webinar.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pp-faq-item-wrap elementor-grid-item">
                                            <div class="pp-faq-item pp-accordion-item">
                                                <div id="pp-accordion-tab-title-1673"
                                                    class="pp-faq-question pp-accordion-tab-title" tabindex="1673"
                                                    data-tab="3" role="tab"
                                                    aria-controls="pp-accordion-tab-content-1673" aria-expanded="false">
                                                    <div class="pp-accordion-title-icon">
                                                        <div class="pp-accordion-title-text">
                                                        Will there be a Q&A session? </div>
                                                    </div>
                                                    <div class="pp-accordion-toggle-icon">
                                                        <span class='pp-accordion-toggle-icon-close pp-icon'>
                                                            <i aria-hidden="true"
                                                                class="fas fa-chevron-circle-down"></i> </span>
                                                        <span class='pp-accordion-toggle-icon-open pp-icon'>
                                                            <i aria-hidden="true" class="fas fa-chevron-circle-up"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div id="pp-accordion-tab-content-1673"
                                                    class="pp-faq-answer pp-accordion-tab-content" data-tab="3"
                                                    role="tabpanel" aria-labelledby="pp-accordion-tab-title-1673">
                                                    <p>Yes, there will be a Q&A session at the end of the webinar.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pp-faq-item-wrap elementor-grid-item">
                                            <div class="pp-faq-item pp-accordion-item">
                                                <div id="pp-accordion-tab-title-1674"
                                                    class="pp-faq-question pp-accordion-tab-title" tabindex="1674"
                                                    data-tab="4" role="tab"
                                                    aria-controls="pp-accordion-tab-content-1674" aria-expanded="false">
                                                    <div class="pp-accordion-title-icon">
                                                        <div class="pp-accordion-title-text">
                                                        Will I receive a certificate of participation?</div>
                                                    </div>
                                                    <div class="pp-accordion-toggle-icon">
                                                        <span class='pp-accordion-toggle-icon-close pp-icon'>
                                                            <i aria-hidden="true"
                                                                class="fas fa-chevron-circle-down"></i> </span>
                                                        <span class='pp-accordion-toggle-icon-open pp-icon'>
                                                            <i aria-hidden="true" class="fas fa-chevron-circle-up"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div id="pp-accordion-tab-content-1674"
                                                    class="pp-faq-answer pp-accordion-tab-content" data-tab="4"
                                                    role="tabpanel" aria-labelledby="pp-accordion-tab-title-1674">
                                                    <p>Yes, all participants will receive a certificate of participation.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="pp-faq-item-wrap elementor-grid-item">
                                            <div class="pp-faq-item pp-accordion-item">
                                                <div id="pp-accordion-tab-title-1675"
                                                    class="pp-faq-question pp-accordion-tab-title" tabindex="1675"
                                                    data-tab="5" role="tab"
                                                    aria-controls="pp-accordion-tab-content-1675" aria-expanded="false">
                                                    <div class="pp-accordion-title-icon">
                                                        <div class="pp-accordion-title-text">
                                                            If I miss attending this time can I attend this again?
                                                        </div>
                                                    </div>
                                                    <div class="pp-accordion-toggle-icon">
                                                        <span class='pp-accordion-toggle-icon-close pp-icon'>
                                                            <i aria-hidden="true"
                                                                class="fas fa-chevron-circle-down"></i> </span>
                                                        <span class='pp-accordion-toggle-icon-open pp-icon'>
                                                            <i aria-hidden="true" class="fas fa-chevron-circle-up"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div id="pp-accordion-tab-content-1675"
                                                    class="pp-faq-answer pp-accordion-tab-content" data-tab="5"
                                                    role="tabpanel" aria-labelledby="pp-accordion-tab-title-1675">
                                                    <p>Yes, you may attend it again at a later date</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pp-faq-item-wrap elementor-grid-item">
                                            <div class="pp-faq-item pp-accordion-item">
                                                <div id="pp-accordion-tab-title-1676"
                                                    class="pp-faq-question pp-accordion-tab-title" tabindex="1676"
                                                    data-tab="6" role="tab"
                                                    aria-controls="pp-accordion-tab-content-1676" aria-expanded="false">
                                                    <div class="pp-accordion-title-icon">
                                                        <div class="pp-accordion-title-text">
                                                            What do I need to keep handy during the webinar? </div>
                                                    </div>
                                                    <div class="pp-accordion-toggle-icon">
                                                        <span class='pp-accordion-toggle-icon-close pp-icon'>
                                                            <i aria-hidden="true"
                                                                class="fas fa-chevron-circle-down"></i> </span>
                                                        <span class='pp-accordion-toggle-icon-open pp-icon'>
                                                            <i aria-hidden="true" class="fas fa-chevron-circle-up"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div id="pp-accordion-tab-content-1676"
                                                    class="pp-faq-answer pp-accordion-tab-content" data-tab="6"
                                                    role="tabpanel" aria-labelledby="pp-accordion-tab-title-1676">
                                                    <p>Just an open mind and a book to make a lot of notes.</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b5513f0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="b5513f0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ac5f7d8"
                        data-id="ac5f7d8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ab3e6f6 elementor-widget elementor-widget-html"
                                data-id="ab3e6f6" data-element_type="widget" data-widget_type="html.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    .listTopPoints ul.elementor-icon-list-items li {
                                        background-color: #FFF;
                                        padding: 15px !important;
                                        border-radius: 10px;
                                    }

                                    .sliderLogo {
                                        overflow: hidden;
                                    }

                                    .sliderLogo img {
                                        max-height: 40px;
                                    }

                                    .iconImage {
                                        top: 50% !important;
                                        transform: translateY(-50%);
                                    }

                                    .arrowRight {
                                        top: 50% !important;
                                        transform: translateY(-50%) rotate(-90deg);
                                    }

                                    .elementor-slideshow__header {
                                        box-sizing: border-box;
                                    }

                                    .elementor-lightbox .dialog-lightbox-close-button {
                                        text-decoration: none;
                                    }

                                    .rowFixed {
                                        position: fixed;
                                        bottom: -100px;
                                        width: 100%;
                                        left: 0px;
                                        z-index: 100;
                                        transition: all ease-in-out 0.5s !important;
                                    }

                                    .sticky.rowFixed {
                                        bottom: 0px;
                                    }

                                    .pp-countdown-wrapper .pp-countdown-item {
                                        margin: 0px;
                                    }

                                    .rowTrainers .elementor-container {
                                        flex-wrap: wrap;
                                        justify-content: center;
                                    }


                                    @media (min-width: 1025px) {
                                        .rowTrainers .elementor-container .elementor-column {
                                            margin-bottom: 15px;
                                            width: 20% !important;
                                        }

                                    }

                                    @media (max-width: 1024px) {
                                        .arrowRight {
                                            top: inherit !important;
                                            transform: translateX(-50%) rotate(0deg);
                                            right: inherit !important;
                                            left: 50% !important;
                                            bottom: -36px;
                                        }
                                    }
                                    </style>

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
                                    </script>
                                    <script>
                                    jQuery(window).scroll(function() {
                                        if (jQuery(this).scrollTop() > 300) {
                                            jQuery('.rowFixed').addClass('sticky');
                                        } else {
                                            jQuery('.rowFixed').removeClass('sticky');
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9a52460 elementor-widget elementor-widget-html"
                                data-id="9a52460" data-element_type="widget" data-widget_type="html.default">
                                <div class="elementor-widget-container">
                                    <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Set the time for 11:30 PM
                                        var today = new Date();
                                        var nextToNextDayChange = getNextToNextDayChange(today);

                                        // Calculate the milliseconds until the next to next day change

                                        // Schedule the function to run every day at 11:30 PM

                                        // Calculate the next to next day change and update as needed
                                        nextToNextDayChange = getNextToNextDayChange(today);

                                        // Debugging: Log the calculated date to the console
                                        // console.log("Next to Next Day Change:", nextToNextDayChange);

                                        // Format the date as "DD MON" (e.g., 04 FEB)
                                        var formattedDate =
                                            ("0" + nextToNextDayChange.getDate()).slice(-2) +
                                            " " +
                                            getMonthAbbreviation(nextToNextDayChange.getMonth());

                                        var dateDesSpan = document.querySelectorAll(
                                        ".date-des"); // Replace with your actual class

                                        dateDesSpan.forEach((item) => {
                                            item.textContent = formattedDate;
                                        });


                                        // Perform any additional actions or update the UI as needed

                                        // Perform any additional actions or update the UI as needed
                                    });

                                    function getNextDayChange(date) {
                                        var nextDayChange = new Date(date.getTime());

                                        // Move to the next day at 11:30 PM
                                        nextDayChange.setDate(date.getDate() + 1);
                                        nextDayChange.setHours(23, 30, 0, 0);

                                        return nextDayChange;
                                    }

                                    function getNextToNextDayChange(date) {
                                        var nextToNextDayChange = new Date(date.getTime());

                                        // Move to the next to next day at 11:30 PM
                                        nextToNextDayChange.setDate(date.getDate());
                                        nextToNextDayChange.setHours(23, 30, 0, 0);

                                        return nextToNextDayChange;
                                    }

                                    function getMonthAbbreviation(monthIndex) {
                                        var months = [
                                            "JAN",
                                            "FEB",
                                            "MAR",
                                            "APR",
                                            "MAY",
                                            "JUN",
                                            "JUL",
                                            "AUG",
                                            "SEP",
                                            "OCT",
                                            "NOV",
                                            "DEC",
                                        ];
                                        return months[monthIndex];
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section hidden
                class="elementor-section elementor-top-section elementor-element elementor-element-14470a3 elementor-section-content-middle rowFixed elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="14470a3" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26bb512"
                        data-id="26bb512" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-6fc712b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="6fc712b" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e4a36f5"
                                        data-id="e4a36f5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4e22978 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="4e22978" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">₹ 99</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9ff3786 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="9ff3786" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">₹ 999
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section 
                                class="elementor-section elementor-inner-section elementor-element elementor-element-2e5f59f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2e5f59f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1c79cb5"
                                        data-id="1c79cb5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-239df22 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-heading"
                                                data-id="239df22" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">Offer
                                                        Expires in</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8fba4ca elementor-widget__width-auto small-timer elementor-countdown--label-block elementor-widget elementor-widget-countdown"
                                                data-id="8fba4ca" data-element_type="widget"
                                                data-widget_type="countdown.default">
                                                <div class="elementor-widget-container">
                                                    <div data-evergreen-interval="900"
                                                        class="elementor-countdown-wrapper" data-date="">
                                                        <div class="elementor-countdown-item"><span
                                                                class="elementor-countdown-digits elementor-countdown-minutes"></span>
                                                        </div>
                                                        <div class="elementor-countdown-item"><span
                                                                class="elementor-countdown-digits elementor-countdown-seconds"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11a28bd"
                        data-id="11a28bd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b35ce4f elementor-align-left elementor-widget__width-auto elementor-mobile-align-justify elementor-tablet-align-center elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                                data-id="b35ce4f" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="https://info172.mojo.page/trainer-growth-webinar-sxga"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">JOIN NOW</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <style id="skip-link-styles">
        .skip-link.screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
        }

        .skip-link.screen-reader-text:focus {
            background-color: #eee;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
        }
        </style>
        <script>
        (function() {
            var skipLinkTarget = document.querySelector('main'),
                sibling,
                skipLinkTargetID,
                skipLink;

            // Early exit if a skip-link target can't be located.
            if (!skipLinkTarget) {
                return;
            }

            // Get the site wrapper.
            // The skip-link will be injected in the beginning of it.
            sibling = document.querySelector('.wp-site-blocks');

            // Early exit if the root element was not found.
            if (!sibling) {
                return;
            }

            // Get the skip-link target's ID, and generate one if it doesn't exist.
            skipLinkTargetID = skipLinkTarget.id;
            if (!skipLinkTargetID) {
                skipLinkTargetID = 'wp--skip-link--target';
                skipLinkTarget.id = skipLinkTargetID;
            }

            // Create the skip link.
            skipLink = document.createElement('a');
            skipLink.classList.add('skip-link', 'screen-reader-text');
            skipLink.href = '#' + skipLinkTargetID;
            skipLink.innerHTML = 'Skip to content';

            // Inject the skip link.
            sibling.parentElement.insertBefore(skipLink, sibling);
        }());
        </script>
        <script type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What is the duration of the webinar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>The webinar will last for approximately 1.5 hours.<\/p>\n"
                }
            }, {
                "@type": "Question",
                "name": "Is there a registration fee?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>Yes, the webinar fee is just Rs.199 .<\/p>\n"
                }
            }, {
                "@type": "Question",
                "name": "How can I join the webinar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>After registration, you will receive a link via email to join the webinar.<\/p>\n"
                }
            }, {
                "@type": "Question",
                "name": "Will I get the recording of the program?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>This is a program where the trainers will be trained. So no recording will be provided.<\/p>\n"
                }
            }, {
                "@type": "Question",
                "name": "If I miss attending this time can I attend this again?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>Yes, you may attend it again at a later date<\/p>\n"
                }
            }, {
                "@type": "Question",
                "name": "What do I need to keep handy during the webinar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>Just an open mind and a book to make a lot of notes.<\/p>\n"
                }
            }]
        }
        </script>
        <link rel='stylesheet' id='fancybox-css'
            href='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/powerpack-elements/assets/lib/fancybox/jquery.fancybox.min.css?ver=2.8.3'
            media='all' />
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/wp-smush-pro/app/assets/js/smush-lazy-load.min.js?ver=3.11.1'
            id='smush-lazy-load-js'></script>
        <!-- <script id='jquery-core-js-extra'>
        var pp = {
            "ajax_url": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-admin\/admin-ajax.php"
        };
        var pp = {
            "ajax_url": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-admin\/admin-ajax.php"
        };
        </script> -->
        <!-- <script src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' 
            id='jquery-core-js'></script>-->
        <!-- <script src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script> -->
         
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi1.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi2.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi3.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi4.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi5.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi6.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi7.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi8.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi9.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi10.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi11.js'; ?>">
            <link rel="stylesheet"  href="<?php echo base_url() . 'assets/frontend/default-new/js/webinar/webi12.js'; ?>">

      <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/powerpack-elements/assets/js/min/frontend.min.js?ver=2.8.3'
            id='powerpack-frontend-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.13.2'
            id='elementor-pro-webpack-runtime-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.11.3'
            id='elementor-webpack-runtime-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.11.3'
            id='elementor-frontend-modules-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
            id='regenerator-runtime-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
            id='wp-polyfill-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5'
            id='wp-hooks-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae'
            id='wp-i18n-js'></script> 
        <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        </script>
        <script id='elementor-pro-frontend-js-before'>
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-admin\/admin-ajax.php",
            "nonce": "a80c0a6ced",
            "urls": {
                "assets": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
        </script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.13.2'
            id='elementor-pro-frontend-js'></script>
        <!-- <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
            id='elementor-waypoints-js'></script> -->
        <!-- <script src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2'
            id='jquery-ui-core-js'></script> -->
        <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.11.3",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "e_swiper_latest": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "kit-elements-defaults": true,
                "page-transitions": true,
                "notes": true,
                "loop": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "https:\/\/trainersgrowthsummit.sgacademy.info\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 328,
                "title": "Workshop%20GA%20%E2%80%93%20Trainers%20Growth%20Summit",
                "excerpt": "",
                "featuredImage": false
            }
        };
        </script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.11.3'
            id='elementor-frontend-js'></script>
        <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.13.2'
            id='pro-elements-handlers-js'></script>
        <script src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/underscore.min.js?ver=1.13.4'
            id='underscore-js'></script>
        <script id='wp-util-js-extra'>
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        </script>
        <!-- <script src='https://trainersgrowthsummit.sgacademy.info/wp-includes/js/wp-util.min.js?ver=6.1.1'
            id='wp-util-js'></script>
        <script id='wpforms-elementor-js-extra'>
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
        </script> -->
        <!-- <script
            src='https://trainersgrowthsummit.sgacademy.info/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.0.2'
            id='wpforms-elementor-js'></script> -->
        <script>
        jQuery(document).ready(function($) {
            $(document).on('countdown_expire', function() {

                Object.keys(localStorage)
                    .filter(key => key.endsWith('evergreen_interval'))
                    .forEach(key => localStorage
                        .removeItem((key)))

                Object.keys(localStorage)
                    .filter(key => key.endsWith('evergreen_due_date'))
                    .forEach(key => localStorage
                        .removeItem((key)))

            });
        });
        </script>
        <script>
        var timeoutHandle;

        function countdown(minutes, seconds) {
            function tick() {
                var counter = document.getElementById("timer2");
                counter.innerHTML =
                    minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                seconds--;
                if (seconds >= 0) {
                    timeoutHandle = setTimeout(tick, 1000);
                } else {
                    if (minutes >= 1) {
                        // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                        setTimeout(function() {
                            countdown(minutes - 1, 59);
                        }, 1000);
                    }
                }
            }
            tick();
        }

        countdown(15, 00);
        </script>




    <!-- Page cached by LiteSpeed Cache 5.7.0.1 on 2024-06-22 10:21:01 -->
</section>
<!------- body section end ------>