function generateCalendar(daysInMonth) {
    const calendar = document.getElementById('calendar');


    const daysOfWeek = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
 
 daysOfWeek.forEach(day => {
        const dayHeader = document.createElement('div');
        dayHeader.classList.add('day', 'day-header');
        dayHeader.textContent = day;
        calendar.appendChild(dayHeader);
    });


    for (let day = 1; day <= daysInMonth; day++) {
        const dayElement = document.createElement('div');
        dayElement.classList.add('day');
        dayElement.textContent = day;
        calendar.appendChild(dayElement);
    }
}

meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", 
    "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

const currentDate = new Date();
const currentMonth = currentDate.getMonth();
const currentYear = currentDate.getFullYear();
const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
const daysInNextMonth = new Date(currentYear, currentMonth + 2, 0).getDate();
generateCalendar(daysInMonth);



for (let i = 0; i < meses.length; i++){
    if (currentMonth == i){
        monthName = meses[i]; 
       document.getElementById('monthHeader').innerHTML = (monthName)
    }
}
    