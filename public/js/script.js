const htmlElement = document.getElementsByTagName('html')[0].getAttribute('lang');
const bodyTag = document.getElementsByTagName('body')[0];

if (htmlElement == 'ar') {
    bodyTag.classList.add('ArabicActived');
}