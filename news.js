
var url = 'http://newsapi.org/v2/top-headlines?' +
          'country=in&' +
          'apiKey=d2b1ea046e174072838c9ad6d9f91acb';
var req = new Request(url);
fetch(req)
.then(news=> news.json())
    
.then((articles) => { 
   
    console.log(articles.articles);
    // let slider = document.querySelector('#news_slider');
    let slider = document.querySelector('#news_slider');
    
    
    for(let i=0;i<20;i++){
        let newElement = document.createElement('div');
        newElement.setAttribute("class","news-tiles");
        
        let tile  = document.createElement('div');
        tile.setAttribute("class","tiles");
       
        slider.appendChild(newElement);
        newElement.appendChild(tile);
        let title = document.createElement('h5');
        tile.appendChild(title);
        tile.childNodes[0].textContent = articles.articles[i].title
        // console.log(tile.childNodes[0]);

        
        
    };


    // console.log(slider);









    });


     

