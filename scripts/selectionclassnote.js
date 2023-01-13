//CLASS NOTE PAGE SELECTION

let courseVal = document.getElementById('courseSelect');
let yearVal = document.getElementById('yearSelect');
let streamVal = document.getElementById('streamSelect');
let subjectVal = document.getElementById('subjectSelect');
let chapterVal = document.getElementById('chapterSelect');


function updateYear() {
    if (courseVal.value == "error") {
        yearVal.innerHTML = '<option selected="" value="error">Year</option>';
        streamVal.innerHTML = '<option selected="" value="error">Stream</option>';
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else if (courseVal.value == "btech") {
        yearVal.innerHTML = '<option selected="" value="error">Year</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>';

        streamVal.innerHTML = '<option selected="" value="error">Stream</option>';
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else if (courseVal.value == "bba") {
        yearVal.innerHTML = '<option selected="" value="error">Year</option><option value="1">1</option><option value="2">2</option><option value="3">3</option>';

        streamVal.innerHTML = '<option selected="" value="error">Stream</option>';
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else {
        yearVal.innerHTML = '<option selected="error">Year</option>';
        streamVal.innerHTML = '<option selected="" value="error">Stream</option>';
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    }
}


function updateStream() {
    if (courseVal.value == "btech" && yearVal.value == "error") {
        streamVal.innerHTML = '<option selected="" value="error">Stream</option>';
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else if (courseVal.value == "btech" && yearVal.value == "1") {
        streamVal.innerHTML = '<option selected="" value="error">Stream</option><option value="all">All</option>';

        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else if (courseVal.value == "btech" && yearVal.value == "2") {
        streamVal.innerHTML = '<option selected="" value="error">Stream</option><option value="cse">CSE</option><option value="cse-aiml">CSE-aiml</option><option value="cse-iot">CSE-iot</option><option value="cs-it">CS-it</option><option value="cst">CST</option><option value="bt">BT</option><option value="ece">ECE</option><option value="ee">EE</option><option value="eee">EEE</option><option value="ce">CE</option><option value="me">ME</option>';

        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else {
        streamVal.innerHTML = '<option selected="" value="error">Stream</option>';
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    }
}


function updateSubject() {
    if (courseVal.value == "btech" && yearVal.value == "1" && streamVal.value == "error") {
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option>';
    } 
    else if (courseVal.value == "btech" && yearVal.value == "1" && streamVal.value == "all") {
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option><option value="chemistry">Chemistry</option><option value="physics">Physics</option><option value="foreignlanguage">Foreign Language</option><option value="mathematics">Mathematics</option><option value="engineeringdrawing">Engineering Drawing</option><option value="esp&sdp">ESP&SDP</option><option value="workshop">Workshop</option><option value="english">English</option><option value="phed">Ph ED</option><option value="programmingforproblemsolving">Programming for problem solving</option><option value="designthinking">Design Thinking</option><option value="engineeringmechanics">Engineering Mechanics</option><option value="economics">Economics</option><option value="basicelectronicsengineering">Basic electronics Engineering</option><option value="basicelectricalengineering">Basic electrical Engineering</option>';
    } 
    else if (courseVal.value == "btech" && yearVal.value == "2" && streamVal.value == "cse") {
        subjectVal.innerHTML = '<option selected="" value="error">Subject</option><option value="dsa">DSA</option><option value="analogelectronics">Analog Electronics</option><option value="digitalelectronics">Digital Electronics</option><option value="mathematics">Mathematics</option><option value="itworkshop">It Workshop</option><option value="esp">ESP</option><option value="sdp">SDP</option><option value="humanities">Humanities</option><option value="analogelectronicslab">Analog Electronics Lab</option><option value="digitalelectronicslab">Digital Electronics Lab</option><option value="dsalab">DSALab</option><option value="itworkshoppractical">It Workshop Practical</option><option value="uhv">UHV</option>';
    } 
    else {
        subjectVal.innerHTML = '<option selected=""value="error">Subject</option>';
    }
}




courseVal.onchange = updateYear;
updateYear();

yearVal.onchange = updateStream;
updateStream();

streamVal.onchange = updateSubject;
updateSubject();
