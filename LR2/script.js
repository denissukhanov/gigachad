let inp = document.querySelectorAll('.save'),
    vals = localStorage.getItem('vals') ? localStorage.getItem('vals').split`,` : ''; 
for(let i = 0; i < inp.length; i++) vals[i] ? inp[i].value = vals[i] : '';
window.addEventListener('beforeunload',() => localStorage.setItem('vals', [...inp].map(e => e.value)) );

document.getElementById("clearButton").onclick = function(e) {
    document.getElementById('search').value = "";
    document.getElementById('author').value = "";
    document.getElementById('text').value = "";
    document.getElementById('cost').value = "";
} //очистка полей фильтра

let name = document.querySelector('#search'); // Получаем input
let desc = document.querySelector('#text'); // Получаем input
let regex = /[0-9]/g; // регулярка только цифры

name.oninput = function(){
    this.value = this.value.replace(regex, '');
}

desc.oninput = function(){
    this.value = this.value.replace(regex, '');
}

