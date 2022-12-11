function f1() {
    let name = document.getElementById('name').value;
    if (name.length < 1) {
        document.getElementsByTagName('p')[0].innerHTML = "Invalid name";
    }
    else {
        document.getElementsByTagName('p')[0].style.display = 'none';
    }
}
function f2() {
    let email = document.getElementById('email').value;
    if (email.length < 12) {
        document.getElementsByTagName('p')[1].innerHTML = "Invalid email";
    }
    else {
        document.getElementsByTagName('p')[1].innerHTML = "Email is Ok";
    }
}
function f3() {
    let phone = document.getElementById('phn1').value;
    //let phone=phone1.tostring();
    if (phone.length < 11) {
        document.getElementsByTagName('p')[2].innerHTML = "Invalid phone number";
    }
    else {
        document.getElementsByTagName('p')[2].innerHTML = "Phone number is Ok";
    }
}
function f4() {
    let username = document.getElementById('id').value;
    if (username.length < 3) {
        document.getElementsByTagName('p')[3].innerHTML = "Invalid ID format";
    }
    else {
        document.getElementsByTagName('p')[3].style.display = 'none';
    }
}
function f5() {
    let pass = document.getElementById('password').value;
    if (pass.length < 7) {
        document.getElementsByTagName('p')[2].innerHTML = "weak password";
    }
    else {
        document.getElementsByTagName('p')[2].innerHTML = "password is strong";
    }
}
function f6() {
    let pass = document.getElementById('conpass').value;

    let conpass = document.getElementById('con1').value;
    if (conpass != pass) {
        document.getElementsByTagName('p')[3].innerHTML = "Password didn't match";
    }
    else {
        document.getElementsByTagName('p')[3].innerHTML = "Password matched";
    }
}

function change1() {
    let name = document.getElementById("emp1").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change2() {
    let name = document.getElementById("emp2").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change3() {
    let name = document.getElementById("emp3").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change4() {
    let name = document.getElementById("emp4").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change5() {
    let name = document.getElementById("emp5").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change6() {
    let name = document.getElementById("emp6").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function search() {
    let name = document.getElementByTagName('select')[6].value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controllers/adminsection/employeedetailsvalidator.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name=' + name);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
        }
    }
}
function searchbranch() {
    let name = document.getElementById('branchid').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controllers/adminsection/branchdetailsvalidator.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name=' + name);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
        }
    }
}
function showavaiablepackage() {
    let name = document.getElementById('branchroom').value;
    if (name != " ") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../../controllers/adminsection/getpackage.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByTagName('select')[7].innerHTML = this.responseText;
            }
        }
    }
}