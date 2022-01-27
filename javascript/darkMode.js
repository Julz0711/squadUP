// Light/Dark Mode toggle    
function toggleTheme() {
    var themeChange = document.getElementsByTagName("body")[0].getAttribute("class");

    if (themeChange.indexOf("dark-theme") > -1) {
        localStorage.setItem('isDarkMode', false);

        if (localStorage.getItem('isDarkMode') === 'false') {
            document.body.classList.remove('dark-theme');
            document.getElementById("dm-li").classList.add('sunV2');
            document.getElementById("dm-li").classList.remove('moonV2');
            document.getElementById("logoChange").classList.add('logoLM');
            document.getElementById("logoChange").classList.remove('logoDM');
            document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";
        }
    }
    else {
        localStorage.setItem('isDarkMode', true);

        if (localStorage.getItem('isDarkMode') === 'true') {
            document.body.classList.add('dark-theme');
            document.getElementById("dm-li").classList.remove('sunV2');
            document.getElementById("dm-li").classList.add('moonV2');
            document.getElementById("logoChange").classList.remove('logoLM');
            document.getElementById("logoChange").classList.add('logoDM');
            document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";
        }
    }
}


//safe darkmode to local storage
if (localStorage.getItem('isDarkMode') === 'true') {
    document.body.classList.add('dark-theme');
    document.getElementById("dm-li").classList.remove('sunV2');
    document.getElementById("dm-li").classList.add('moonV2');
    document.getElementById("logoChange").classList.remove('logoLM');
    document.getElementById("logoChange").classList.add('logoDM');
}
