 const mouse = document.querySelector('.cursor');
document.addEventListener('mousemove', function(e){
            mouse.style.display='block';
            const { clientX: x, clientY: y } = e;
            mouse.style.top = y + 'px';
            mouse.style.left = x + 'px';
          })
        document.addEventListener('mouseleave', function(){
           mouse.style.display='none';
       })