

let count = 0;
let countEl = document.getElementById("count");
let saveEl = document.getElementById("save-entries");

 function increment() {
      count = count + 1;
      countEl.innerText = count;
}


function save() {
      let countStr =  count + " - ";
      saveEl.textContent += countStr;
      countEl.innerText = 0;
      count = 0;
}

function reset() {
      saveEl.textContent = "Previous Entries: ";
      countEl.innerText = 0;
      count = 0;
}
