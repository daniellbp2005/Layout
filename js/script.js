const row = document.getElementById('rowScroll');
const btnL = document.getElementById('setaL');
const btnR = document.getElementById('setaR');

function mover(direcao){
    row.scrollBy({left:direcao * 160, behavior: 'smooth'}) // animação de deslize -  behavior: 'smooth'
    setTimeout(atualizarSetas, 300) // tmp p atulizar as setas
    console.log("dks");
    
}

function atualizarSetas(){
    btnL.disabled = row.scrollLeft <=  0
    btnR.disabled = row.scrollLeft + row.clientWidth >= row.scrollWidth - 1
}

row.addEventListener('scroll', atualizarSetas) 
atualizarSetas();