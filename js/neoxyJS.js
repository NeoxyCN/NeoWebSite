/*
这个Javascript文档仅仅是Neoxy为了方便开发而整理的js代码集
最后更新:2017/8/3
 */
function exitUser()
{
    document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    document.cookie = "power=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    document.cookie = "coin=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    location.reload(true);
}
