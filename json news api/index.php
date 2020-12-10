<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
    <link rel="stylesheet" href="style.css" />
    <title>News</title>
</head>
<body>
    <form class="search" action="">
        <input class="input" type="text" />
        <input type="submit" />
    </form>

    <div class="container">
        <ul class="news-list"></ul>
    </div>


    <script>
        const searchForm = document.querySelector('.search');
        const input = document.querySelector('.input');
        const newsList = document.querySelector('.news-list');

        console.log(newsList)

        searchForm.addEventListener('submit', retrieve)

        function retrieve(e){

            if (input.value == ''){
                alert('Input field is empty!')
                return
            }

            newsList.innerHTML = ''

            e.preventDefault()

            const apiKey = "7368dd22a893436e9f09ffc102b13d54"

            let topic = input.value;

            let url = `https://newsapi.org/v2/everything?q=${topic}&apiKey=${apiKey}`

            fetch(url).then((res)=>{
                return res.json()
            }).then((data)=>{
                console.log(data)
                data.articles.forEach(article =>{
                    let li = document.createElement('li');
                    let a = document.createElement('a');
                    a.setAttribute('href', article.url );
                    a.setAttribute('target', '_blank');
                    a.textContent = article.title;
                    li.appendChild(a);
                    newsList.appendChild(li);
                })
        }).catch((error)=>{
            console.log(error)
        })
            
        }
    </script>


</body>
</html>