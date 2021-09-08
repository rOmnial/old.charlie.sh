require('./bootstrap');

import Typed from 'typed.js';
window.Typed = Typed;

window.sleep = function (ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

window.startTyping = function () {
    new Typed('#typed', {
        strings: ['./charlie.sh'],
        autoInsertCss: false,
        async onComplete(self) {
            await sleep(1000)
            document.getElementById('commandResponse').style.opacity = '100';
            await sleep (500)
            document.getElementById('nextCommand').style.opacity = '100';
        },
        typeSpeed: 50,
        showCursor: false
    });
}
