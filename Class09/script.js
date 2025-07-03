// document.getElementById("axios-get").addEventListener("click", function(){
//     const apiEndPoint = "https://jsonplaceholder.typicode.com/posts/1";
//     axios.get(apiEndPoint)
//     .then(response=>{
//         console.log(response.data)
//     })
// })


// document.getElementById("fetch-get").addEventListener("click", async function(){
//     const apiEndPoint = "https://jsonplaceholder.typicode.com/posts/1";
//     const response = await fetch(apiEndPoint)
//     const data = await response.json()
//     console.table(data.id);
// })

// document.getElementById("fetch-get").addEventListener("click", async function(){
//     const apiEndPoint = "https://jsonplaceholder.typicode.com/posts/1";
//     const response = await fetch(apiEndPoint)
//     if(!response.ok){
//         console.log("error")
//         return;
//     }
//     const data = await response.json()
//     console.table(data.id);
// })


// document.getElementById("fetch-post").addEventListener("click", async function(){
//     const apiEndPoint = "http://localhost:8000/backend.php";
//     const data = {
//         "email": "dip@gmail.com",
//         "pass": "12345"
//     }
//     const response = await fetch(apiEndPoint,{
//         method : "POST",
//         body : JSON.stringify(data),
//         headers : {
//             "Content-Type": "application/json"
//         }
//     })
//     const output =await response.json()
//     console.log(output)
// })



// document.getElementById("axios-post").addEventListener("click", async function(){
//     const apiEndPoint = "http://localhost:8000/backend.php";
//     const data = {
//         "email": "dip@gmail.com",
//         "pass": "12345"
//     }
//     const response = await axios.post(apiEndPoint, data,{
//          "Content-Type": "application/json"
//     })
//     const output = response.data
//     console.log(output)
// })


// document.getElementById("axios-country").addEventListener('click', async function(){
//     const apiEndpoint = "https://restcountries.com/v3.1/name/bangladesh?fields=name,capital,population,currencies"
//     const response = await axios.get(apiEndpoint)
//     const output = response.data[0]
//     const view = `The capital is ${output.capital[0]}`
//     console.log(view)
// })


document.getElementById("fetch-form-posts").addEventListener('click', async function(){
    const apiEndPoint = "http://localhost:8000/form.php";

    const form = new FormData();
    form.append("email","dip@gmail.com")
    form.append("pass", "12345")
    const response = await fetch(apiEndPoint,{
        method:"POST",
        body: form
    })
    

    const output = await response.json()
    console.log(output)
})


document.getElementById("axios-form-post").addEventListener('click', async function(){
    const apiEndPoint = "http://localhost:8000/form.php";
    const form = new FormData();
    form.append("email","dip@gmail.com")
    form.append("pass", "12345")
    const response = await axios.post(apiEndPoint,form)
    const output = await response.data
    console.log(output)
})


document.getElementById('show-all').addEventListener('click', async function(){
    const apiEndpoint = "http://localhost:3000/comments"
    const showIn= 'php-api-result'
    const response = await axios.get(apiEndpoint)
    document.getElementById(showIn).innerHTML = `<pre>${JSON.stringify(response.data, null, 2) }</pre>`;
   
} )

document.getElementById('get-record').addEventListener('click', async function(){
    const id = document.getElementById('get-id').value;
    const apiEndpoint = `http://localhost:3000/comments/${id}`
    const showIn= 'php-api-result'
    const response = await axios.get(apiEndpoint)
    document.getElementById(showIn).innerHTML = `<pre>${JSON.stringify(response.data, null, 2) }</pre>`;
   
} )

document.getElementById('record-form').addEventListener('submit', async function(e){
    e.preventDefault();
    const apiEndpoint = `http://localhost:3000/comments/`
    const email = document.getElementById('email').value;
    const pass = document.getElementById('pass').value;
    await axios.post(apiEndpoint, {email, pass})

    const showIn= 'php-api-result'
    const response = await axios.get(apiEndpoint)
    document.getElementById(showIn).innerHTML = `<pre>${JSON.stringify(response.data, null, 2) }</pre>`;
   
} )


document.getElementById('update-btn').addEventListener('click', async function(){
    const id = document.getElementById('get-id').value;
    const apiEndpoint = `http://localhost:3000/comments/${id}`
    const email = document.getElementById('email').value;
    const pass = document.getElementById('pass').value;
    await axios.put(apiEndpoint, {email, pass})

    const showIn= 'php-api-result'
    const response = await axios.get(apiEndpoint)
    document.getElementById(showIn).innerHTML = `<pre>${JSON.stringify(response.data, null, 2) }</pre>`;
   
} )


document.getElementById('delete-btn').addEventListener('click', async function(){
    const confirmation = confirm("Are you Sure")
    if(!confirmation){
        return;
    }
    const id = document.getElementById('get-id').value;
    const apiEndpoint = `http://localhost:3000/comments/${id}`
    await axios.delete(apiEndpoint)

    const showIn= 'php-api-result'
    const apiEndpointNew = `http://localhost:3000/comments/`
    const response = await axios.get(apiEndpointNew)
    document.getElementById(showIn).innerHTML = `<pre>${JSON.stringify(response.data, null, 2) }</pre>`;
   
} )


document.getElementById('xkcd').addEventListener('click', async function(){
    const apiEndPoint = "http://localhost:8000/proxy.php"
    const response = await axios.get(apiEndPoint)
    const image = response.data.img;
    console.table(response.data)
   
} )


// document.getElementById("axios-get").addEventListener("click", async function(){
//     const apiEndPoint = "https://jsonplaceholder.typicode.com/posts/1";
//     const response = await axios.get(apiEndPoint)
//     console.table(response.data);
// })


// document.getElementById("axios-get").addEventListener("click", async function(){
//     const apiEndPoint = "https://jsonplaceholder.typicode.com/posts/sfds";
//     try{
//         const response = await axios.get(apiEndPoint)
//         console.table(response.data);
//     }catch(error){
//         console.table(error.message);
//     }
    
// })