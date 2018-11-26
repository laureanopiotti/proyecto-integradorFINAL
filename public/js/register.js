fetch('https://restcountries.eu/rest/v2/all')
.then(res => res.json())
.then(data => {
    let output = "<select id='pick-country' name='pick-country'>";
    data.forEach(function(country){
        console.log(country.name);
        output += `
        <option value=${country.name}>${country.name}</option>`
        });
    output += '</select>';    
    document.getElementById('country').innerHTML = output;
    });
