require('dotenv').config()

const express = require('express');
// import express from 'express';
// both things are same
const app = express();
// app ke andar both kuch hai 
//const port = 4000;
// kisi port pe server listen karega

// app se get request ho rhi hai 
//   '/' is home route
app.get('/',(req,res)=> {
        res.send("hello himanshu")
})

// req -> request , res -> response

app.get('/hello',(req,res)=>{
    res.send("Hello there on get /hello request")
})

app.get('/login', (req,res)=>{
    res.send('<h1> Please Login </h1>')
})

 




// listen bhi toh karna pdega
 //app.listen(port, ()=>{
 //    console.log(`Listening on port ${port}`) // template litral
 //})

app.listen(process.env.PORT, ()=>{
    console.log(`Listening on port ${process.env.PORT}`) // template litral
})