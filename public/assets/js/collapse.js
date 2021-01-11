
for (let i=1;i<=8;i++){
    let question = document.getElementById("question"+i);
    question.addEventListener('click', function(){
        if(document.getElementById('collapse'+i).style.display==="none"){
            for(let j=1;j<=8;j++){
                document.getElementById('collapse'+j).style.display="none";
            }
    
            document.getElementById('collapse'+i).style.display="block";
        }
        else{
            for(let j=1;j<=8;j++){
                document.getElementById('collapse'+j).style.display="none";
            }
        }
        
    })
}
