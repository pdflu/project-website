<link rel="stylesheet" type="text/css" href="./lib/cookieconsent.min.css" />
<script src="./lib/cookieconsent.min.js"></script>
<script>

<?php if ($BROWSER_LANG === "de") { ?>
        let cookie_message = 'Wir verwenden Cookies, um Concept Graph für Sie möglichst benutzerfreundlich zu gestalten. Wenn Sie fortfahren, nehmen wir an, dass Sie mit der Verwendung von Cookies auf dieser Webseite einverstanden sind. Weitere Informationen entnehmen Sie bitte ';
        let cookie_link = "GraphVis Privacy Link";
        let cookie_button = "Alles klar!";
        let cookie_href = "https://openknowledgemaps.org/datenschutz-conceptgraph";
<?php } else { ?>
        let cookie_message = 'We use cookies to improve your experience. By your continued use of this site you accept such use. For more information, please see ';
        let cookie_link = "GraphVis Privacy Link";
        let cookie_button = "Got it!";
        let cookie_href = "https://openknowledgemaps.org/privacy-conceptgraph";
<?php }; ?>
    function clearCookies (names) {
      var i = 0, namesLength = names.length;
      for (i; i < namesLength; i += 1) {
        document.cookie = names[i] + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
      }
    }
    var cookie_domain = "<?php echo $COOKIE_DOMAIN ?>";
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#eff3f4",
                    "text": "#2D3E52"
                },
                "button": {
                    "background": "#2D3E52",
                    "text": "#ffffff"
                }
            },
            "position": "bottom",
            "theme": "classic",
            "content": {
                "message": cookie_message,
                "dismiss": cookie_button,
                "link": cookie_link,
                "href": cookie_href
            },
            "cookie": {
              "name": "privacy-graphvis",
              "domain": cookie_domain
            }
        })
    });
    
    function getCookie(name) {
        var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
        return v ? v[2] : null;
    }
    
    function setCookie(name, value, days) {
        var d = new Date;
        d.setTime(d.getTime() + 24*60*60*1000*days);
        document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
    }
    
</script>