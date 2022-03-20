/*const rate = document.querySelector('.rating');
const items = rate.querySelectorAll('.rating-item');

rate.onclick = e => {
    const elClass = e.target.classList;
        if (!elClass.contains('active')) {
        items.forEach( 
            item => item.classList.remove('active')
        );

        console.log(e.target.getAttribute("data-rate"));
    
        elClass.add('active'); 
    }
};*/

function crack() {
  let id = null;
  const elem = document.getElementById("login_box");   
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
      if (pos == 350) {
      clearInterval(id);
      } else {
      pos++; 
      elem.style.top = pos + "px"; 
      elem.style.left = pos + "px"; 
      }
  }
}