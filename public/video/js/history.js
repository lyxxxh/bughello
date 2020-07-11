
//TODO 还不能跳转到集
function addHistory(title,url,part)
{
    let oldHistory = getHistory();
    let currIndex = oldHistory.findIndex(val => val.title == title);

    let curr = {'title':title,'url':url,'part':part};

    if( currIndex != -1)
    oldHistory[currIndex] = curr;
    else
    oldHistory.unshift(curr);

    localStorage.setItem('history', JSON.stringify(oldHistory))
}


function getHistory()
{
    let oldHistory = localStorage.getItem('history');
    if(! oldHistory)
    oldHistory = '[]';
    return  JSON.parse(oldHistory);
}

function delHistory()
{
    localStorage.setItem('history','[]');
}