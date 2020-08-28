function setIframeSrc() {
    const map = document.getElementById("map");
    if (map) {
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", map.attributes["data-src"].value);
        ifrm.setAttribute("title", "Veja nossa entrevista no Destaque Brasil");
        ifrm.setAttribute("frameborder", "0");
        ifrm.setAttribute("aria-hidden", "false");
        ifrm.setAttribute("tabindex", "0");
        ifrm.setAttribute("defer", "defer");
        map.appendChild(ifrm);
    }
}

setTimeout(setIframeSrc, 3000);
