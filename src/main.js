const themeBtn = document.querySelector('.navbar__theme-btn');

themeBtn.addEventListener('click', () => {
    const body = document.body;
    if (body.className == "") {
        body.className = "dark";
        themeBtn.innerHTML = `<i class="uil uil-sun"></i>`
    } else {
        body.className = "";
        themeBtn.innerHTML = `<i class="uil uil-moon"></i>`
    }
})


const sidebarOpenBtn = document.querySelector('.sidebar__toggle-open')
const sidebarCloseBtn = document.querySelector('.sidebar__toggle-close')
const sidebar = document.querySelector('.sidebar')

sidebarOpenBtn.addEventListener('click', () => {
    sidebar.style.left = "0";
    sidebarCloseBtn.style.display = "inline-block";
    sidebarOpenBtn.style.display = "none";
})

sidebarCloseBtn.addEventListener('click', () => {
    sidebar.style.left = "-100%";
    sidebarCloseBtn.style.display = "none";
    sidebarOpenBtn.style.display = "inline-block";
})


const chart = document.getElementById('chart');

new Chart(chart, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


const pieChart = document.querySelector("#categories")

const data = {
    datasets: [
        {
            barPercentage:0.5,
            barThickness:6,
            maxBarThickness:8,
            minBarLength:2,
            data: [10,20,30,40,50,60,70]
        }
    ]
}

new Chart(pieChart, {

    type: 'pie',
    data: data,

})