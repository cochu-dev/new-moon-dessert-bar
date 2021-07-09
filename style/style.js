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