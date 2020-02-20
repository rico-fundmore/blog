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


 
 

          

          const $burgerDiv = document.getElementById('burgerMenu');
          const $body = document.querySelector('body');
          let activeState = false;

          $burgerDiv.addEventListener('click', function(e){
            e.preventDefault();
            if(!activeState){
                $burgerDiv.classList.add('activated');
                $body.classList.add('navopen');
            }else{
                $burgerDiv.classList.remove('activated');
                $body.classList.remove('navopen');
            }
            activeState = !activeState;
          })
    }
)();



