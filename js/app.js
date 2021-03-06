!function() {
    function toggleFocus() {
        for (var self = this; -1 === self.className.indexOf("nav-menu"); ) "li" === self.tagName.toLowerCase() && (-1 !== self.className.indexOf("focus") ? self.className = self.className.replace(" focus", "") : self.className += " focus"), 
        self = self.parentElement;
    }
    var container, button, menu, links, subMenus;
    if (container = document.getElementById("site-navigation"), container && (button = container.getElementsByTagName("button")[0], 
    "undefined" != typeof button)) {
        if (menu = container.getElementsByTagName("ul")[0], "undefined" == typeof menu) return void (button.style.display = "none");
        menu.setAttribute("aria-expanded", "false"), -1 === menu.className.indexOf("nav-menu") && (menu.className += " nav-menu"), 
        button.onclick = function() {
            -1 !== container.className.indexOf("toggled") ? (container.className = container.className.replace(" toggled", ""), 
            button.setAttribute("aria-expanded", "false"), menu.setAttribute("aria-expanded", "false")) : (container.className += " toggled", 
            button.setAttribute("aria-expanded", "true"), menu.setAttribute("aria-expanded", "true"));
        }, links = menu.getElementsByTagName("a"), subMenus = menu.getElementsByTagName("ul");
        for (var i = 0, len = subMenus.length; len > i; i++) subMenus[i].parentNode.setAttribute("aria-haspopup", "true");
        for (i = 0, len = links.length; len > i; i++) links[i].addEventListener("focus", toggleFocus, !0), 
        links[i].addEventListener("blur", toggleFocus, !0);
    }
}(), function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf("webkit") > -1, is_opera = navigator.userAgent.toLowerCase().indexOf("opera") > -1, is_ie = navigator.userAgent.toLowerCase().indexOf("msie") > -1;
    (is_webkit || is_opera || is_ie) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
        var element, id = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(id) && (element = document.getElementById(id), element && (/^(?:a|select|input|button|textarea)$/i.test(element.tagName) || (element.tabIndex = -1), 
        element.focus()));
    }, !1);
}();