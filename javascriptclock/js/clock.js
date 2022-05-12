let isim = prompt("İsminizi yazın..");
let user = document.querySelector("#myName");

if(isim){
    user.innerHTML = isim;
} else {
    user.innerHTML = "Lütfen isminizi girin!";
}

function showTime(){
    let clock = document.querySelector("#myClock");
    let date = new Date();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let second = date.getSeconds();
    let day = date.getDay();

    switch(day){
        case 0:
            day = "Pazar";
            break;
        case 1:
            day = "Pazartesi";
            break;
        case 2:
            day = "Salı";
            break;
        case 3:
            day = "Çarşamba";
            break;
        case 4:
            day = "Perşembe";
            break;
        case 5:
            day = "Cuma";
            break;
        case 6:
            day = "Cumartesi";
            break;
    }
    clock.innerHTML = `${hour}:${minute}:${second} ${day}`
}
showTime();