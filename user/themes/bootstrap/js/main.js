(
    function(){

        if( window.innerWidth > 768){
            // Also can pass in optional settings block
            var rellax = new Rellax('.avlx', {
              speed: -2,
              breakpoints: [576, 768, 1201],
              center: false,
              wrapper: null,
              round: true,
              vertical: true,
              horizontal: false
            });
          
          }


 
 

          

          const burgerDiv = document.getElementById('burgerMenu');
          let activeState = false;

          burgerDiv.addEventListener('click', function(){
            if(!activeState){
                burgerDiv.classList.add('activated');
            }else{
                burgerDiv.classList.remove('activated');
            }
            activeState = !activeState;
          })
    }
)();



