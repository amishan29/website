

    fetch(`https://api.covid19api.com/summary`)
      .then(data => {
        return data.json();
        console.log(data);
      }).then(displayResults_2);
  

  function displayResults_2 (data) {
    console.log(data);
    let covid_name= document.querySelector('.name');
    let total_case=document.querySelector('.total-cases .value');
    let total_recovered=document.querySelector('.recovered .value');
    let total_death=document.querySelector('.deaths .value');
    let new_case=document.querySelector('.total-cases .new-value');
    let new_recovered=document.querySelector('.recovered .new-value');
    let new_death=document.querySelector('.deaths .new-value');

    covid_name.innerHTML='<p>'+`${data.Countries[76].Country}`+'</p>';
    total_case.innerHTML='<p>'+`${data.Countries[76].TotalConfirmed}`+'</p>';
    total_recovered.innerHTML='<p>'+`${data.Countries[76].TotalRecovered}`+'</p>';
    total_death.innerHTML='<p>'+`${data.Countries[76].TotalDeaths}`+'</p>';
    new_case.innerHTML='<p>'+'+'+`${data.Countries[76].NewConfirmed}`+'</p>';
    new_recovered.innerHTML='<p>'+'+'+`${data.Countries[76].NewRecovered}`+'</p>';
    new_death.innerHTML='<p>'+'+'+`${data.Countries[76].NewDeaths}`+'</p>';
  }
