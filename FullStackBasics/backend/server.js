import express from 'express';

const app = express();

app.get('/',(req,res)=>{
    res.send("Server is ready")
})

const port = process.env.PORT || 3000;


app.get('/api/jokes',(req,res)=>{
    const jokes = [{
  id: 1,
  title: "JavaScript Truth",
  content: "Why did the developer go broke? Because he kept comparing null == undefined and got no value out of it.",
},
{
  id: 2,
  title: "CSS Confusion",
  content: "I told my friend I had a flexible layout... now he thinks I do yoga with CSS.",
},
{
  id: 3,
  title: "Loop Life",
  content: "Why do programmers hate nature? It has too many bugs... and infinite loops in forests.",
},
{
  id: 4,
  title: "Debugging Reality",
  content: "Debugging: Removing the needles from the haystack that you accidentally added while building it.",
},
{
  id: 5,
  title: "Full Stack Feels",
  content: "I’m not saying I’m a full-stack developer, but I can Google both frontend and backend errors equally fast.",
}]
    res.send(jokes)
})


app.listen(port, ()=>{
    console.log(`Server is ready at ${port}`);
})
 