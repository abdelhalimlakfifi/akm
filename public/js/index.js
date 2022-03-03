

function replaceClass(element)
{
    var elem = document.getElementsByTagName('h3');
    
    elem[0].outerHTML = '<h5>'+ elem[0].innerHTML +'</h5>';
    
    elem = document.getElementById(element);
    // console.log(element);
    
    // console.log(elem.innerText);
    elem.outerHTML = '<h3>'+ elem.innerText +'</h3>';
}