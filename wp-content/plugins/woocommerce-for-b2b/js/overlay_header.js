let headerContainer = document.querySelector(".elementor-location-header .elementor-top-section");
let headerHeight = headerContainer.offsetHeight + 2;
headerContainer.style.cssText = "margin-bottom: -" + headerHeight + "px; background-color: transparent; border-color: transparent;";
let columnList = headerContainer.getElementsByClassName("elementor-top-column");
for ( let n = 0; n < columnList.length; ++n) {
    columnList[n].style.zIndex = "1";
};