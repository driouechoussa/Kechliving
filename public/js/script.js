const htmlElement = document.getElementsByTagName('html')[0].getAttribute('lang');

if (htmlElement == 'ar') {
    document.getElementsByTagName('body')[0].classList.toggle('ArabicActived');
    document.getElementsByTagName('h1')[0].classList.toggle('ArabicActived');
}