var imgPath = '';
var imgNum = 1;
var interval;

interval = setInterval(next, 4000);

function next() {
    if(imgNum == 4){
        imgNum = 0;
    }

    imgPath = './images/olive' + ++imgNum + '.jpg';
    document.getElementById("pic").setAttribute("src", imgPath);
}

function stop(){
    clearInterval(interval);
}

function validate(){
    if (document.getElementById('fname').value == null || document.getElementById('fname').value == '') {
        alert("Please enter a name");
        return false;
    }

    if (document.getElementById('sname').value == null || document.getElementById('sname').value == '') {
        alert("Please enter a surname");
        return false;
    }

    if (document.getElementById('uname').value == null || document.getElementById('uname').value == '') {
        alert("Please enter a username");
        return false;
    }

    if (document.getElementById('phone').value == null || document.getElementById('phone').value == '') {
        alert("Please enter a valid phone number");
        return false;
    }
}