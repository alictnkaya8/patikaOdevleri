let btnDOM = document.querySelector('#liveToastBtn');
let listDOM = document.querySelector('#list');
let taskDOM = document.querySelector('#task');
let listLength = document.getElementsByTagName('li');

for (let i = 0; i < listLength.length; i++) {
    let closeBtn = document.createElement("span");
    closeBtn.textContent = '\u00D7';
    closeBtn.classList.add("close");
    closeBtn.onclick = remove;
    listLength[i].append(closeBtn);
    listLength[i].onclick = check;
}

function remove(){
    this.parentElement.remove();
}
function check(){
    this.classList.toggle("checked");
}

btnDOM.addEventListener('click', newElement)

function newElement(){
    if(taskDOM.value.trim() == ""){
        $(".error").toast("show");
    } else {
        $(".success").toast("show");
        let liDOM = document.createElement("li");
        listDOM.appendChild(liDOM);
        liDOM.innerHTML = task.value;
        taskDOM.value = "";
    }

    liDOM.onclick = check;
        
    let closeButton = document.createElement("span");
    closeButton.textContent = "\u00D7";
    closeButton.classList.add("close");
    closeButton.onclick = removeButton;
    
    liDOM.append(closeButton);
    listDOM.append(liDOM);
    inputElement.value = ("");
}

