var status = 1;
function show(show){
    if (status == 1) {
        show.style.display = 'inline';
        return status = 0
    }else{
        show.style.display = 'none';
        return status = 1
    }
}