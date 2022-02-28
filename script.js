const rate = document.querySelector('.rating');
const items = rate.querySelectorAll('.rating-item')

rate.onclick = e => {
    const elClass = e.target.classList;
        if (!elClass.contains('active')) {
        items.forEach( 
            item => item.classList.remove('active')
        );

        console.log(e.target.getAttribute("data-rate"));
    
        elClass.add('active'); 
    }
};