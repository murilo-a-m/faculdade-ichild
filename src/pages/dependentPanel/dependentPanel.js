const myDiv = document.getElementById("DependentSubmit");

myDiv.addEventListener("click", (ev) => {
    ev.preventDefault();
    console.log(ev)
    // editDependent();
});

function editDependent(dependentId) {
    console.log
    window.location = `../editDependent/editDependent.php?id=${dependentId}`;    
}
  