window.addEventListener("load",function (){
    
    const $ = (q) => document.querySelector(q)
    
    function addToCart (prod){
        const cart = localStorage.cart
        if(!cart){
            const newCart = [prod];
            localStorage.cart = JSON.stringify(newCart)
        } else {
            const cartObj = JSON.parse(cart)
            cartObj.push(prod)
            localStorage.cart = JSON.stringify(cartObj)
        }
        
    }
    
    function getCart(){
        const cart = localStorage.cart
        if(!cart){
           return []
        } else {
            return JSON.parse(cart)
        }
    }
    
    function createRow(product){
        
        const tr = document.createElement("tr")
        const td1 = document.createElement("td")
        const td2 = document.createElement("td")
        const td3 = document.createElement("td")
        
        const addToCartButton = document.createElement("button")
        addToCartButton.innerText = "Agregar al carrito"
        addToCartButton.addEventListener("click",function(){
            addToCart(product)
        })
        
        
        td1.innerText = product.nombre
        td2.innerText = product.precio
        td3.appendChild(addToCartButton)
        
        tr.appendChild(td1)
        tr.appendChild(td2)
        tr.appendChild(td3)
        return tr
    }
    
    const tbody = $("#prods")
    
    RestApi.get("/api/product")
        .then((products)=>{
            products.forEach((prod)=>{
                tbody.appendChild(createRow(prod))
            })
        })
    
     const tbodyCart = $("#cart")
     getCart()
         .forEach((prod)=>{
        tbodyCart.appendChild(createRow(prod))
    })
})

