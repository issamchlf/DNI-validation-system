document.getElementById('dniForm').addEventListener('submit', function(event) {
    event.preventDefault();


    let dniValue = document.getElementById('dni').value;
    

    if (isNaN(dniValue) || dniValue < 0 || dniValue > 99999999) {
        alert('El número introducido es inválido. Por favor, ingresa un número entre 0 y 99999999.');
        return;
    }

    fetch('/api/calculate-dni', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ dni: dniValue })
    })
    .then(response => response.json())
    .then(data => {

        if (data.letter) {
            document.getElementById('dniValue').textContent = data.dni;
            document.getElementById('dniLetter').textContent = data.letter;
            document.getElementById('resultContainer').classList.remove('hidden');
        } else {
            alert('Ocurrió un error. Por favor, inténtalo de nuevo.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al conectarse con el servidor.');
    });
});
