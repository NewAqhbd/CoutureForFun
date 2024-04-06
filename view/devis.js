document.addEventListener("DOMContentLoaded", function() {
    
    var deux = document.querySelector('input[name="deux"]');
    // décocher ourlets et retouches lorsque la troisième case est coché
    deux.addEventListener("click", function() {
        var bases = document.querySelectorAll('.base');
        if (deux.checked) {
            bases.forEach(function(base) {
                if (base !== deux) {
                    base.checked = false;
                }
            });
        }
    });

    var ourlets = document.querySelector('input[name="ourlets"]');
    var retouches = document.querySelector('input[name="retouches"]');
    //décocher ourlets + retouches si ourlets ou retouches est sélectionné
    ourlets.addEventListener("click", function() {
        if (ourlets.checked) {
            deux.checked = false;
        }
    });

    retouches.addEventListener("click", function() {
        if (retouches.checked) {
            deux.checked = false;
        }
    });
});
