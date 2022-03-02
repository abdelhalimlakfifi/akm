

function replaceClass(element)
{
    const elem = document.getElementsByClassName('h3');
    elem.classList.remove('h3');

    elem = document.getElementById(element);
    elem.classList.add('h3');
}