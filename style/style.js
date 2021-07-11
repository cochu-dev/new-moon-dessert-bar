window.onscroll = function()
{
    let floatingButton = document.getElementById('index-my-floating-btn');
    if(pageYOffset < 1000)
    {
        floatingButton.className = "my-floating-btn";
    }else
    {
        floatingButton.className ="my-floating-btn active";
    }
};

var zoomIn = document.getElementById('zoomIn');
var imgItem = document.getElementById('imgItem');

function showBgImg(e) {
    zoomIn.style.display = 'block';
    imgItem.src = e.src;
}

imgItem.onclick = function() {
    zoomIn.style.display = 'none';
}