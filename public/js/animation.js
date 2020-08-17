let select=document.getElementById('select')
let label=document.getElementById('text')
let names=document.getElementById('names').placeholder="Nom de l'Entreprise"

select.addEventListener('change',function(){
        if(select.options[select.selectedIndex].id=="societe"){
            let names=document.getElementById('names').placeholder="Nom de l'Entreprise"
            label.textContent="Inserer le document de votre Entreprise"
                        }
else{
           let names=document.getElementById('names').placeholder="Inserer votre Nom"

            label.textContent="Inserer votre CV"

}

})
