/* 
controllo valore passato nel campo input file del form, se il 
file passato ha un'estensione diversa da jpg o jpeg il bottone 
rimane disabilitato.

*/

const okButton = document.getElementById('buttonSubmit');
const input = document.querySelector('#img')

    input.addEventListener('input', e => {
        const value = input.value.trim() 
        const valuepassato = input.value; 
        const allowedExtensions = /(\.jpg|\.jpeg)$/i;  
        if (value && allowedExtensions.exec(valuepassato)) {
                okButton.disabled = false
        } else {
                okButton.disabled = true
        }
    }) // chiusura addEvent

