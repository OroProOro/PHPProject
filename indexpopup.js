document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('button2');
    const popuptotal = document.getElementById('infoPopupTotal');
    const popup = document.getElementById('infoPopup');
    const close = document.getElementById('closePopup');

    function closePopupHandler() {
        const popuptotal = document.getElementById('infoPopupTotal');
        const popup = document.getElementById('infoPopup');
        popuptotal.style.display = 'none';
        popup.style.display = 'none';
        close.style.display = 'none'
        document.body.style.overflow = 'visible';
    }

  
    button.addEventListener('click', function () {
        popuptotal.style.display = 'flex';
        popup.style.display = 'flex';
        close.style.display = 'flex'
        document.body.style.overflow = 'hidden';
    });

 
    window.addEventListener('click', function (event) {
        if (event.target === close) {
            closePopupHandler();
        }
    });
});

