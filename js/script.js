function mover(id, direcao){
    const row = document.getElementById(id);
    row.scrollBy({left:direcao * 160, behavior: 'smooth'}) // animação de deslize -  behavior: 'smooth'
    setTimeout(()=> atualizarSetas(row), 300) // tmp p atulizar as setas
    
}

function atualizarSetas(row){
    const contPai = row.closest('.conteiner-scroll');

    const btnL = contPai.querySelector('button:nth-of-type(1)')
    const btnR = contPai.querySelector('button:nth-of-type(2)')

    btnL.disabled = row.scrollLeft <=  0
    btnR.disabled = row.scrollLeft + row.clientWidth >= row.scrollWidth - 1
}

document.querySelectorAll('.row').forEach(row => {
    row.addEventListener('scroll', () => atualizarSetas(row));
    atualizarSetas(row);
});