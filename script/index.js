function searchByName() {
    console.log("helppp");
    let  tr, td,i ,txtValue;
    const input = document.getElementById('search');
    const filter = input.value.toUpperCase();
    const table = document.getElementById('contactTable');
    tr = document.getElementsByTagName('tr');
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    
};
document.getElementById('addNewBtn').onclick = function (){
    location.href = 'form.php';

};

