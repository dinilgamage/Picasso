import './bootstrap';

            document.onmousemove = function(e) {
            var dot = document.createElement('div');
            dot.className = 'paint-dot';
            dot.style.left = (e.pageX - 5) + 'px'; 
            dot.style.top = (e.pageY - 5) + 'px'; 
            document.body.appendChild(dot);

            setTimeout(function() {
                dot.style.opacity = 0;
            }, 500);

            setTimeout(function() {
                document.body.removeChild(dot);
            }, 1000);
        };
 