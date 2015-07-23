function over(a,b)
{
    var elems = document.getElementsByClassName("menu_block");
            
    for(var i = 0; i < elems.length; i++) {
        elems[i].style.background = 'silver';
        elems[i].style.color='black';
    }
    
    a.style.background=b;
    a.style.color='white';
}

function changeimg(k)
{
    img.src=k;
}

function changetitle(m,n)
{
    title.innerHTML=(m);
    summary.innerHTML=("有關 "+ m +" 的介紹......(繼續閱讀)");
    title.href=n;
    summary.href=n;
    img_div.href=n;
}